@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">

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

  <table class = "table table-bordered table-hover">
        <thead> 
            <th>Order ID</th>
            <th>User ID</th>
            <th>Title</th>
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
            <a href="<?php echo 'editorder/'.$row->id ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo 'deliverorder/'.$row->id ?>" class="btn btn-danger">Delete & Deliver</a></td>
             </tr>
              <?php } ?>
	<?php echo $order->render()?>
        </tbody>
  </table>

    </div>
  </div>
</div>

@stop()