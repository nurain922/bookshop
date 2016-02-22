@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit User</title>
</head> 

<body>
            <form class="form-horizontal" action="\updateuser" method="POST" >
                <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                <input type="hidden" name="id" value="<?= $row->id ?>">
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="<?= $row->name ?>" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input  type="text" name="password" value="<?= $row->password ?>" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text"  name="email" value="<?= $row->email?>" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="Submit" value="Edit Record" class="btn btn-warning">
                          <a href="<?php echo '/users'?>" class="btn btn-primary">Back</a>
                        </div>
                      </div>
                    </form>
</body>
</html>
@stop