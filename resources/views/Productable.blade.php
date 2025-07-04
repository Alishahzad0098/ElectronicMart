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
    <table border="2" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>

                <th>Images</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->categories}}</td>
                    <td>{{ $products->name}}</td>
                    <td>{{ $products->price}}</td>
                    <td>{{ $products->description}}</td>
                    <td>
                        <!-- @if (is_array($products->images)) -->
                        @foreach ($products->images ?? [] as $image)
                            <img src="{{ asset('storage/' . $image) }}" width="100px" height="100px" style="margin: 5px;">
                        @endforeach
                        <!-- @endif -->
                    </td>

                    <td>
                        <a href="{{route('delete.product', $products->id)}}"><button
                                class="btn btn-outline-primary">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>