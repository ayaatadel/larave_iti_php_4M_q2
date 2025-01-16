<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create track</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-success mx-5 my-3">Create New track</h1>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form method="Post" action="{{ route('tracks.store') }}" class="w-75 border m-auto p-3">
        @csrf
        {{-- name --}}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="track Name" class="form-label">Track Name</label>
            <input name="name" type="text" class="form-control" id="track Name">

        </div>
        {{-- track description --}}
        <div class="mb-3">
            <label for="track description" class="form-label">Track description</label>
            <input name="description" type="text" class="form-control" id="track description">

        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- image --}}
        <div class="mb-3">
            <label for="track Image" class="form-label">Image</label>
            <input name="logo" type="text" class="form-control" id="track Image">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
