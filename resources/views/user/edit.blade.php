@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit User</title>
</head> 

<body>
        <form action="\updateuser" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        Username :
        <input type="text" name="name" value="<?= $row->name ?>" class="form-control">
        Password :
        <input type="text" name="password" value="<?= $row->password ?>" class="form-control">
        Email :
        <input type="text"  name="email" value="<?= $row->email?>" class="form-control">

        <br/>
        <input type="Submit" value="Edit Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop