<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container m-4">

        <form action="{{ route('achievements.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-5">Add New Achievements</h1>

            @if (session()->has('error'))
                <div class="alert alert-error">
                    {{ session()->get('error') }}
                </div>
            @endif



            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter a 100 words description here.."
                    value="{{ old('description') }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    @if (session()->has('error'))
        <div class="alert alert-error">
            {{ session()->get('error') }}
        </div>
    @endif
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
