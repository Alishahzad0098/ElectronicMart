<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
    /* Combined styles from both examples with orange/yellow color scheme */
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgba(235, 200, 6, 0.88) 0px 30px 30px -20px;
        margin: 20px auto;
        position: relative;
    }

    .title {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: rgb(255, 153, 0);
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .message {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
        text-align: center;
        margin-bottom: 20px;
    }

    .signin {
        text-align: center;
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
        margin-top: 15px;
    }

    .signin a {
        color: rgb(255, 153, 0);
        text-decoration: none;
    }

    .signin a:hover {
        text-decoration: underline;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        background: white;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #f6ffcfff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
        font-size: medium;
        outline: none;
        transition: all 0.3s ease;
    }

    .form label .input:focus {
        border-inline: 2px solid rgb(255, 153, 0);
    }

    .form label .input + span {
        color: rgb(170, 170, 170);
        position: absolute;
        left: 20px;
        top: 15px;
        font-size: 0.9em;
        transition: 0.3s ease;
    }

    .form label .input:focus + span,
    .form label .input:valid + span {
        color: rgb(255, 153, 0);
        top: -10px;
        left: 15px;
        font-size: 0.7em;
        font-weight: 600;
        background: white;
        padding: 0 5px;
    }

    .submit {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg, rgb(255, 153, 0) 0%, rgba(248, 192, 7, 0.79) 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: rgba(238, 156, 4, 0.94) 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
        cursor: pointer;
        font-size: 16px;
    }

    .submit:hover {
        transform: scale(1.03);
        box-shadow: rgba(238, 156, 4, 0.94) 0px 23px 10px -20px;
    }

    .submit:active {
        transform: scale(0.95);
        box-shadow: rgba(238, 156, 4, 0.94) 0px 15px 10px -10px;
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }
        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }
</style>
</head>

<body>
    <div class="form-back">
        <div class="container align-middle">
            <form class="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <p class="title">Register</p>
                <p class="message">Signup now and get full access to our app.</p>

                <label>
                    <input class="input" type="text" name="name" required="">
                    <span>Name</span>
                </label>

                <label>
                    <input class="input" type="email" name="email" required="">
                    <span>Email</span>
                </label>

                <input type="hidden" name="role" value="user">

                <label>
                    <input class="input" type="password" name="password" required="">
                    <span>Password</span>
                </label>

                <label>
                    <input class="input" type="password" name="password_confirmation" required="">
                    <span>Confirm password</span>
                </label>

                <button class="submit" type="submit">Submit</button>
                <p class="signin">Already have an account? <a href="{{ route('loginpage') }}">Sign in</a></p>
            </form>
        </div>
        @if ($errors->any())
            <div class="alert text-danger">

                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>