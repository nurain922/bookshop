@extends('layout.master')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif

<a href="<?php echo'createuser' ?>" class="btn btn-info">Create User </a>

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
            <a href="<?php echo 'edituser/'.$row->id?>" class="btn btn-success">Edit</a>
            <a href="<?php echo 'deleteuser/'.$row->id ?>" class="btn btn-warning">Delete</a>
        </td>
       </tr>
            <?php } ?>
              
        </tbody>
      
    </table>

@stop