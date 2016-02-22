@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading">Admin</div>
                <div class="panel-body">
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>10</h3>
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{('/orders')}}" class="small-box-footer">Click Here! <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>50<sup style="font-size: 20px">%</sup></h3>
                  <p>Books Up!</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="{{('/books')}}" class="small-box-footer">Go checks <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{('/users')}}" class="small-box-footer">Check this out! <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
              </div>
            </div>
        </div>


            <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading">User</div>
                <div class="panel-body">
               <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Account</h3>
                  <p>View Your Order</p>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <a href="/show" class="small-box-footer">Click Here!<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
                 <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>Create</h3>
                  <p>An Order</p>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <a href="/createorders" class="small-box-footer">Click Here!<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
             </div>
            </div>
        </div>
          
    </div>
</div>
@endsection
