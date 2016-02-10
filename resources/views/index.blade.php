@extends('layout.master')
@section('content')
  <table class="table table-bordered table-hover">
        <thead>
        	<th>ProductID</th>
        	<th>ProductName</th>
        	<th>Price</th>
        	<th>Quantity</th>
        	<th>Action</th>
        </thead>
        <tbody>
        	<?php
        		foreach($data as $row)
        	?>
        		<tr>
        			<td><?php echo $row->id ?></td>
        			<td><?php echo $row->product_name ?></td>
        			<td><?php echo $row->product_price ?></td>
        			<td><?php echo $row->product_qty ?></td>
        		</tr>
        </tbody>
  </table>
@stop()