// script.js
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const video = document.getElementById('videoInput');

Promise.all([
    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('/models'),
]).then(start);

function start() {
    document.body.append('Models Loaded');
    navigator.getUserMedia(
        { video: {} },
        stream => video.srcObject = stream,
        err => console.error(err)
    );
    recognizeFaces();
}

async function recognizeFaces() {
    const labeledDescriptors = await loadLabeledImages();

    // Check if we have labeled descriptors
    if (labeledDescriptors.length === 0) {
        console.error('No labeled descriptors found');
        return;
    }

    const faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.6);

    video.addEventListener('play', () => {
        console.log('playing');
        const canvas = document.createElement('canvas');
        canvas.width = video.width;
        canvas.height = video.height;
        document.body.append(canvas);

        const displaySize = { width: video.width, height: video.height };
        faceapi.matchDimensions(canvas, displaySize);

        setInterval(async () => {
            const detections = await faceapi.detectAllFaces(video).withFaceLandmarks().withFaceDescriptors();
            const resizedDetections = faceapi.resizeResults(detections, displaySize);

            canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);

            const result = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor));

            result.forEach(async (result, i) => {
                const box = resizedDetections[i].detection.box;
                const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() });
                drawBox.draw(canvas);

                if (result.label != 'unknown') {
                    const faceCanvas = document.createElement('canvas');
                    faceCanvas.width = box.width;
                    faceCanvas.height = box.height;
                    const faceContext = faceCanvas.getContext('2d');
                    faceContext.drawImage(video, box.x, box.y, box.width, box.height, 0, 0, box.width, box.height);
                    const detectionImage = faceCanvas;
                    captureAndSendImage(result.label, detectionImage);
                }
            });
        }, 100);
    });
}

async function fetchLabels() {
    try {
        const response = await fetch('/labels');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const labels = await response.json();
        return labels;
    } catch (error) {
        console.error('Error fetching labels:', error);
        return [];
    }
}

async function loadLabeledImages() {
    const labels = await fetchLabels();

    return Promise.all(
        labels.map(async (label) => {
            const descriptions = [];
            for (let i = 1; i <= 20; i++) { // Sesuaikan jumlah gambar jika perlu
                try {
                    const img = await faceapi.fetchImage(`storage/app/public/labeled_images/${label}/${i}.jpg`);
                    const detection = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor();
                    if (detection) {
                        descriptions.push(detection.descriptor);
                    } else {
                        console.log(`No face detected in image ${i} for label ${label}`);
                    }
                } catch (error) {
                    console.error(`Error loading image ${i} for label ${label}:`, error);
                }
            }
            document.body.append(label + ' Faces Loaded | ');
            return new faceapi.LabeledFaceDescriptors(label, descriptions);
        })
    );
}


function captureAndSendImage(label, detectedImage) {
    const detectionCanvas = document.createElement('canvas');
    detectionCanvas.width = detectedImage.width;
    detectionCanvas.height = detectedImage.height;
    const context = detectionCanvas.getContext('2d', { willReadFrequently: true });
    context.drawImage(detectedImage, 0, 0);
    const dataUrl = detectionCanvas.toDataURL('image/jpeg');

    fetch(dataUrl)
        .then(res => res.blob())
        .then(blob => {
            const formData = new FormData();
            formData.append('detectedImage', blob, `${label}.jpg`);
            formData.append('label', label); // Label tetap dikirim jika diperlukan di backend

            fetch('http://127.0.0.1:8000/upload', { // Pastikan URL ini benar
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => { throw new Error(text) });
                }
                return response.json();
            })
            .then(data => {
                console.log('Success:', data);
                // Tampilkan path atau lakukan tindakan lain yang diperlukan
                alert(`Gambar berhasil diunggah: ${data.path}`);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
}
