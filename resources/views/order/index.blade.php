@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">

@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif


  <table class = "table table-bordered table-hover">
        <thead> 
            <th>ID</th>
            <th>User ID</th>
            <th>Book Title</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 

              foreach($order as $row){
            ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->iduser?></td>
              <td><?php echo $row->book_title?></td>
              <td><?php echo $row->unitprice?></td>
              <td><?php echo $row->qty?></td>
              <td><?php echo $row->total?></td>
            <td><a href="<?php echo 'view/'.$row->id ?>" class="btn btn-info">View</a>
            <a href="<?php echo 'edit/'.$row->id ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo 'delete/'.$row->id ?>" class="btn btn-danger">Delete</a></td>
             </tr>
              <?php } ?>

        </tbody>
  </table>

    </div>
  </div>
</div>

@stop()