@extends('layout.master')
@section('content')

@if(Session::has('message1'))
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Alert!</h4>
        {{ Session::get('message1') }}
        </div>
@endif

@if(Session::has('message2'))
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        {{ Session::get('message2') }}
        </div>
@endif

@if(Session::has('message3'))
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{ Session::get('message3') }}
        </div>
@endif

    <table class="table table-bordered table-hove">
        <thead>
        <tr>
        <th>UserID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        
            </tr>
        </thead>

        <tbody>
      <?php foreach($user as $row){
      ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->password ?></td>
              <td>

            <a href="<?php echo 'user/'.$row->id ?>" class="btn btn-info">View</a>
            <a href="<?php echo 'edituser/'.$row->id?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo 'deleteuser/'.$row->id ?>" class="btn btn-danger">Delete</a>
        </td>
       </tr>
            <?php } ?>
              
        </tbody>
      
    </table>

    <center><a href="<?php echo'createuser' ?>" class="btn btn-success">Create User</a></center>


@stop