<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .input{
            outline: 2px solid rgb(89, 148, 147);
        }
        input:focus{
            border: solid whitesmoke;
        }
        .input::placeholder{
            color: white;
        }
        .login{
            outline: 2px solid rgb(89, 148, 147);
        }
    </style>
</head>
<body>
    <div class="flex justify-items-center bg-cover bg-center h-screen bg-white/30 place-content-center" style="background-image: url('{{asset('images/guru.png')}}');">
        <div class="absolute z-0 top-0 left-0"><img class="h-30" src="{{asset('images/ornamentop.png')}}" alt=""></div>
        <div class="flex my-auto">
            <img class="h-40" src="{{asset('images/logo.png')}}"alt="">
            <div class="flex flex-col ml-3 text-white text-2xl font-bold mt-5 mr-12">Selamat Datang di <span class="text-yellow-300">Vigilant Parent</span></div>
        </div>

        <div class="login my-auto flex w-full max-w-sm flex-col gap-6 p-7 rounded-md z-50" style="background-color: rgb(89, 148, 147,0.5);">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl font-semibold text-yellow-300">Login</h1>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <label class="form-label text-yellow-300">Email address</label>
                    <input placeholder="username@gmail.com" type="email" class="border-none font-light input max-w-full bg-transparent  outline-offset-0 rounded-md" />
                </div>
                <div class="form-field">
                    <label class="form-label text-yellow-300">Kata Sandi</label>
                    <div class="form-control">
                        <input placeholder="•••••••••••" type="password" class="border-none font-light input max-w-full bg-transparent  outline-offset-0 rounded-md" />
                    </div>
                </div>
                <div class="form-field">
                    <label class="form-label">
                        <a class="link link-underline-hover text-red-700 text-sm">Lupa Password?</a>
                    </label>
                </div>
                <div class="form-field pt-3">
                    <div class="form-control justify-between">
                        <button type="button" class="btn w-full text-yellow-200" style="background-color: rgb(89, 148, 147);">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-0"><img class="" width="" src="{{asset('images/ornamenbot.png')}}" alt=""></div>
</div>
<script src="js/app.js"></script>
</body>
</html>
