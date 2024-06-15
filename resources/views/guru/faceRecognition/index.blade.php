<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Recognition</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: teal;
        }
        video{
            z-index: 1;
            border-radius: 2%;
            background-color: rgb(0, 49, 92);
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        canvas {
            position: absolute;
            z-index: 2;
        }
        a{
            background-color: #24314F;
            padding: 1em;
            z-index: 3;
            border-radius: 10px;
            margin-top: 2%;
            font-family: Arial, Helvetica, sans-serif;
            font-weight:100;
            color: whitesmoke;
            text-decoration: none;
        }
        a:hover{
            background-color: #2d3d64;
            color: rgb(219, 219, 219);

        }
    </style>
</head>
<body>
    <video id="videoInput" width="720p" height="550" muted controls></video>
    <canvas id="overlay"></canvas>
    <a href="{{'regist'}}">Tambah Wajah</a>
    <script defer src="{{ asset('js/face-api.min.js') }}"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>
</body>
</html>
