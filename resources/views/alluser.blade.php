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
    <h2>All user Data </h2>
    <a href="newuser"  class="btn btn-primary" >Add User</a>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $id => $user)
        <tr>
            <td>{{ $id + 1  }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->age}}</td>
            <td>{{ $user->city }}</td>
            <td>
                <a href="{{ route('user.view', $user->id) }}"  class="btn btn-info btn-sm">View</a>
               <a href="{{ route('delete.user', $user->id )}}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{ route('update.user', $user->id )}}" class="btn btn-warning btn-sm">Update</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>




<h1></h1>




