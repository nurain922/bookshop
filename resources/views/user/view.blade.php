@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit User</title>
</head> 

<body>
        <form>
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <input type="hidden" name="id" readonly value="<?= $row->id ?>">
        Username :
        <input type="text" name="name" readonly value="<?= $row->name ?>" class="form-control">
        Password :
        <input type="text" name="password" readonly value="<?= $row->password ?>" class="form-control">
        Email :
        <input type="text"  name="email" readonly value="<?= $row->email?>" class="form-control">

        <br/>
        <a href="<?php echo '/edituser/'.$row->id ?>" class="btn btn-success">Edit Record</a>
        <a href="<?php echo '/users'?>" class="btn btn-primary">Back</a>
    </form>
</body>
</html>
@stop