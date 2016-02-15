@extends('layout.master')
@section('content')

<html>
<head>
    <title>Add User</title>
</head> 

<body>
        <form action="\storeuser" method="POST">
        
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        User Name : <input type="text" name="user_name" class="form-control">
        User Password:<input type="text" name="user_pass" class="form-control">
        Full Name :<input type="text" name="user_fname" class="form-control">
        Email :<input type="text"  name="user_email" class="form-control">
        Phone No. : <input type="text"  name="user_phone" class="form-control">
        <br/>
        <input type="Submit" value="Save Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop