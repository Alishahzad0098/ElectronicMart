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
    </body>
</head>

<body>
    <div class="form-back">
        <div class="container">
            <h3>Register Form</h3>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputImage1" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputText" name="email" id="email">
                </div>
                <div class="mb-3 ">
                    <input type="hidden" class="form-control" id="exampleInputText" name="role" id="role" value="user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputImage2" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage3" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputImage3" name="password_confirmation" id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @if ($errors->any())
        <div class="alert text-danger">

            @foreach ($errors-> all() as $error)
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