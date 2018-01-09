<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>Users List</title>
</head>
<body>
<div class="container" style="margin-top: 35px">
    <table id="usersList" class="table table-striped table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Timeframe</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody id="tbody">
        @foreach ($users as $user)
            <tr>
                <td>{{$user['first']}}</td>
                <td>{{$user['last']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['timeframe']}}</td>
                <td>{{$user['created']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
<script>
    $(document).ready(function() {
        $('#usersList').DataTable();
    } );
</script>
</html>