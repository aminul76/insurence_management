@extends('superadmin.admin_master')
@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Home</a></li>
            <li><i class="fa fa-table"></i>Table</li>
            <li><i class="fa fa-th-list"></i>Basic Table</li>
          </ol>
        </div>
      </div>
      <!-- page start-->
  
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Advanced Table
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i> Full Name</th>
                  <th><i class="icon_mobile"></i> Account No</th>
                  <th><i class="icon_phone"></i> Mobile</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                @foreach ($allcustomers as $customer)
               
                <tr>
                <td>{{$customer->name}}</td>
                  <td>{{$customer->accountno}}</td>
                  <td>{{$customer->phone}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{route('admin.paycustomer',$customer->id)}} "><i class="icon_plus_alt2"></i>Pay</a>
                      
                    </div>
                  </td>
                </tr>
                     
                @endforeach
               
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <!-- page end-->
    </section>
  </section>
    
@endsection