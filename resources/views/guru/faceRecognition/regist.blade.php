<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
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
        canvas {
            position: absolute;
        }
        video{
            border-radius: 2%;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        button{
            background-color: #24314F;
            border-radius: 8px;
            padding: 13px;
            color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: lighter;
            margin-bottom: 1px;
            border: none;
        }
        button:hover{
            background-color: #2d3d62;
            color: rgb(210, 210, 210);
        }
        input{
            border: none;
            font-size: 20px;
            font-weight: bolder;
            width: 300px;
            padding: 10px;
            outline:none;
            border-radius: 2px;
            margin-top: 1%;
            margin-bottom: 10px;
        }
        a{
            color: whitesmoke;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Registrasi Wajah untuk {{ $datasiswa->nama_siswa }}</h1>
    <video id="videoInput" width="720" height="550" muted controls></video>
    <input type="text" id="inputNamaFolder" placeholder="Masukkan nama kamu" value="{{ $datasiswa->nama_siswa }}" disabled>
    <button id="registerButton" data-nama-siswa="{{ $datasiswa->nama_siswa }}">Daftarkan Wajah</button>
    <button><a href="index.html">Batal</a></button>
    <script defer src="{{ asset('js/takePict.js') }}"></script>
</body>
</html>
