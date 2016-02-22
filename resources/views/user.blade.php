@extends('layout.master')
@section('content')


        <!-- Main content -->
        <section class="content">
                 <h1>User Profile</h1>
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <h3 class="profile-username text-center">{{Auth::user()->name }}</h3>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>ID :</b> <a class="pull-right">{{ Auth::user()->id }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Email : </b> <a class="pull-right">{{ Auth::user()->email }}</a>
                    </li>
                  </ul>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Account</a></li>
                  <li><a href="#timeline" data-toggle="tab">Place An Order</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  
                 <!--@include('order.show', array('order'=>'order'))-->

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                 
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                      


                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->

@endsection
