@extends('layout.master')
@section('content')
<html>
<head>
    <title>View User</title>
</head> 

<body>
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                <div class="panel-body">
        <form>
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <input type="hidden" name="id" value="<?= $row->id ?>">

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" readonly value="<?= $row->name ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input  type="text" name="password" readonly value="<?= $row->password ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text"  name="email" readonly value="<?= $row->email?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <br>
                    <a href="<?php echo '/edituser/'.$row->id ?>" class="btn btn-success">Edit Record</a>
                    <a href="<?php echo '/users'?>" class="btn btn-primary">Back</a>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div> 
</div>
</body>
</body>
</html>
@stop