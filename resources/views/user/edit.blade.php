@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit User</title>
</head> 

<body>
        <form action="\updateuser" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <input type="hidden" name="iduser" value="<?= $row->id ?>">
        Username :
        <input type="text" name="user_name" value="<?= $row->name ?>" class="form-control">
        Password :
        <input type="text" name="user_pass" value="<?= $row->pass ?>" class="form-control">
        Email :
        <input type="text"  name="user_email" value="<?= $row->email?>" class="form-control">

        <br/>
        <input type="Submit" value="Edit Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop