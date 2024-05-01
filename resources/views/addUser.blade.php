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
    <h2>Stacked form</h2>
    <form action="{{ route( 'addUser') }}" method="post">
        @csrf

        <div class="mb-3 mt-3">
            <label for="name">name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>

        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="mb-3 mt-3">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age">
        </div>

        <div class="mb-3 mt-3">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
