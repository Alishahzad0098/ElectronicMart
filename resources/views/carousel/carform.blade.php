<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    </body>
</head>

<body>
    <div class="form-back">
        <div class="container">
            <form method="POST" action="{{ route('store.car') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Carousel Banner</label>
                    <input type="file" class="form-control" id="exampleInputImage1" name="img" id="img">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Text on Banner</label>
                    <input type="text" class="form-control" id="exampleInputText" name="para" id="para">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>