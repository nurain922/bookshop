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
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
        
            </tr>
        </thead>

        <tbody>
      <?php foreach($user as $row){
      ?>
                <tr>
                    <td><?php echo $row->iduser ?></td>
                    <td><?php echo $row->user_name ?></td>
                    <td><?php echo $row->user_pass ?></td>
                    <td><?php echo $row->user_fname ?></td>
                    <td><?php echo $row->user_email ?></td>
                    <td><?php echo $row->user_phone ?></td>
              <td>
            <a href="<?php echo 'edituser/'.$row->iduser?>" class="btn btn-success">Edit</a>
            <a href="<?php echo 'deleteuser/'.$row->iduser ?>" class="btn btn-warning">Delete</a>
        </td>
       </tr>
            <?php } ?>
              
        </tbody>
      
    </table>

@stop