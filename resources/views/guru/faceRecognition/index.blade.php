<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Recognition</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/face.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="body">
    <video id="videoInput" width="720p" height="550" muted controls></video>
    <canvas id="overlay"></canvas>
    <a href="{{'siswaAbsen'}}">Kembali</a>
    <script defer src="{{ asset('js/face-api.min.js') }}"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>
</body>
</html>
