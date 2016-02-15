@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit User</title>
</head> 

<body>
        <form action="\updateuser" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <input type="hidden" name="iduser" value="<?= $row->iduser ?>">
        Username :
        <input type="text" name="user_name" value="<?= $row->user_name ?>" class="form-control">
        Password :
        <input type="text" name="user_pass" value="<?= $row->user_pass ?>" class="form-control">
        Full Name :
        <input type="text" name="user_fname" value="<?= $row->user_fname ?>" class="form-control">
        Email :
        <input type="text"  name="user_email" value="<?= $row->user_email?>" class="form-control">
        Phone No, :
        <input type="text"  name="user_phone" value="<?= $row->user_phone?>" class="form-control">

        <br/>
        <input type="Submit" value="Edit Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop