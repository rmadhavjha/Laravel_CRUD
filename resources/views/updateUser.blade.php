<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Update User Data </h2>
    <form action="{{ route( 'updating.user', $data->id) }}" method="post">
        @csrf

        <div class="mb-3 mt-3">
            <label for="name">name:</label>
            <input type="text" class="form-control" value="{{ $data->name }}" id="name"  name="name">
        </div>

        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" value="{{ $data->email }}" name="email">
        </div>

        <div class="mb-3 mt-3">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" value="{{ $data->age }}" name="age">
        </div>

        <div class="mb-3 mt-3">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" value="{{ $data->city }}" name="city">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
