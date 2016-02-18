@extends('layout.master')
@section('content')

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
             </tr>
              <?php } ?>

        </tbody>
  </table>

@stop()