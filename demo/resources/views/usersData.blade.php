<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Users Data</title>
</head>
<body>
{{-- @dump($users)   --}}

<table class="table table-bordered w-75 m-auto">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($users as $user )
        {{-- @dump($user --}}

      <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['age'] }}</td>
        <td><button class="btn btn-warning">View</button></td>
      </tr>
        @endforeach


    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
