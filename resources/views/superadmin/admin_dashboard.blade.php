@extends('superadmin.admin_master')

@section('content')
<section id="main-content">
    <section class="wrapper">
      <!--overview start-->
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-briefcase"></i>
            <div class="count">6.674</div>
            <div class="title">all payment</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-briefcase"></i>
            <div class="count">7.538</div>
            <div class="title">last mont payment</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-briefcase"></i>
            <div class="count">4.362</div>
            <div class="title">daily payment</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">1.426</div>
            <div class="title">User</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

      </div>
      <!--/.row-->


 






    </section>
    <div class="text-right">
      <div class="credits">
       
        Designed by <a href="#">Aminul</a>
      </div>
    </div>
  </section> 
@endsection