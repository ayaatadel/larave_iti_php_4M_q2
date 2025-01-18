<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tracks Data</title>
</head>

<body>
    {{-- @dump($tracks) --}}
<div class="m-2 d-flex justify-content-around  ">
    <h1 class="text-info">
        All Tracks Data
    </h1>
    <a href="{{ route('tracks.create') }}">
        {{-- <button class="btn btn-info">Create Track</button> --}}
    <x-button-component class="info" name="Create Track"> </x-button-component>
    </a>
    <a href="{{url()->previous()}}" class="mx-2">
        <x-button-component class="success" name="Back"></x-button-component>

    </a>
</div>

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tracks as $track )

            <tr>
                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->description }}</td>
                <td><div class="w-75 h-75"><img style="width:100%;height=100%" src="{{ $track->logo }}" alt="tracK Logo"></div></td>
                <td><a href={{ route('tracks.show', $track) }}><button class="btn btn-warning">View</button></a>
                   <form action="{{ route('tracks.destroy', $track) }}" method="post">
                    @method('DELETE')
                    @csrf
                   <button
                        class="btn btn-danger">Delete</button>
                  </form>
                {{-- <a href="{{route('tracks.edit',$track->id)  }}">
                    <button
                    class="btn btn-Success">Update</button>
                </a>  --}}
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

<div style="margin:10px;" class="d-flex justify-content-center">
    {{ $tracks->links() }}

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
