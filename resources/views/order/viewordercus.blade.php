@extends('layout.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">

@if(Session::has('message3'))
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{ Session::get('message3') }}
        </div>
@endif

          
<table class = "table table-bordered table-hover">
        <thead> 
            <th>Order ID</th>
            <th>Book Title</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php 

              foreach($order as $row){
            ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->book_title?></td>
              <td><?php echo $row->unitprice?></td>
              <td><?php echo $row->qty?></td>
              <td><?php echo $row->total?></td>
                <td>
             <a href="<?php echo 'deleteorder/'.$row->id ?>" class="btn btn-danger">Delete</a>
            <a href="<?php echo 'createorders' ?>" class="btn btn-primary">Back</a>
        </td>
             </tr>
              <?php } ?>
        </tbody>
  </table>

      
</div>
</div>
</div>
@stop()