const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const video = document.getElementById('videoInput');
const registerButton = document.getElementById('registerButton');
const inputNamaFolder = document.getElementById('inputNamaFolder');

let isRegistering = false;
let images = [];
const maxImagesPerRegistration = 20;
const maxImagesPerPart = 20;
let currentFolderName = '';

navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
        video.srcObject = stream;
        video.play();
    })
    .catch(err => console.error(err));

registerButton.addEventListener('click', handleRegisterButtonClick);

async function handleRegisterButtonClick(event) {
    if (!isRegistering) {
        isRegistering = true;
        images = [];

        // Ambil nama siswa dari data-nama-siswa pada tombol yang diklik
        const namaSiswa = event.target.getAttribute('data-nama-siswa');
        if (!namaSiswa) {
            console.error('Nama siswa tidak tersedia!');
            isRegistering = false;
            return;
        }

        // Set nilai inputNamaFolder dengan nama siswa
        inputNamaFolder.value = namaSiswa;

        createNewFolderAndCaptureImages();
    }
}

function createNewFolderAndCaptureImages() {
    const folderName = inputNamaFolder.value.trim();
    if (!folderName) {
        console.error('Folder name is required!');
        isRegistering = false;
        return;
    }

    currentFolderName = folderName;

    fetch(`/create-folder?folderName=${currentFolderName}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json' // Optional, for JSON data
        }
    })
    .then(response => {
        if (response.ok) {
            console.log('New folder created successfully!');
            captureImages(); // Start capturing images after folder is created
        } else {
            console.error('Failed to create new folder:', response.statusText);
            isRegistering = false; // Reset isRegistering status if folder creation fails
        }
    })
    .catch(error => {
        console.error('Error creating new folder:', error);
        isRegistering = false; // Reset isRegistering status if an error occurs
    });
}

function captureImages() {
    const intervalId = setInterval(() => {
        if (images.length >= maxImagesPerRegistration) {
            clearInterval(intervalId);
            isRegistering = false;
            saveImages(images); // Send images to the server after capturing is complete
        } else {
            takeSnapshot();
        }
    }, 100);
}

function takeSnapshot() {
    const canvas = document.createElement('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    const context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    const imageData = canvas.toDataURL('image/jpeg');
    images.push(imageData);
}

function saveImages(images) {
    const numParts = Math.ceil(images.length / maxImagesPerPart);

    for (let i = 0; i < numParts; i++) {
        const start = i * maxImagesPerPart;
        const end = start + maxImagesPerPart;
        const partImages = images.slice(start, end);
        sendImagePart(partImages, i, numParts);
    }
}

function sendImagePart(partImages, partNumber, totalParts) {
    const formData = new FormData();
    partImages.forEach((image, index) => {
        const blob = dataURItoBlob(image);
        formData.append(`image[]`, blob, `${index + 1}.jpg`);
    });

    formData.append('partNumber', partNumber);
    formData.append('totalParts', totalParts);

    fetch(`/save-images?folderName=${currentFolderName}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token
        },
        body: formData
    })
    .then(response => {
        if (response.ok) {
            console.log(`Part ${partNumber + 1} of ${totalParts} saved successfully!`);
        } else {
            console.error(`Failed to save part ${partNumber + 1} of ${totalParts}:`, response.statusText);
        }
    })
    .catch(error => {
        console.error(`Error saving part ${partNumber + 1} of ${totalParts}:`, error);
    });
}

function dataURItoBlob(dataURI) {
    const byteString = atob(dataURI.split(',')[1]);
    const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
    const ab = new ArrayBuffer(byteString.length);
    const ia = new Uint8Array(ab);
    for (let i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    return new Blob([ab], { type: mimeString });
}
