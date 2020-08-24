@extends('superadmin.admin_master')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-8">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>Name: {{$cusinfo->name}} </li>
            <li><i class="fa fa-university"></i>Account Number: {{$cusinfo->accountno}}</li>
            <li><i class="fa fa-mobile"></i>Phone Number: {{$cusinfo->phone}}</li>
          </ol>
        </div>
      </div>
      @include('superadmin.include.msg')
      <div class="row card align-items-center">
        <div class="col-lg-8">
          <section class="panel">
            <header class="panel-heading">
              Form Elements
            </header>
            <div class="panel-body panel-danger">
            <form class="form-horizontal " action="{{route('admin.paystore')}}" method="post" enctype="multipart/form-data" >
              @csrf
                <div class="form-group ">
                  <label class="col-sm-2 control-label">Name: </label>
                  <div class="col-sm-10 ">
                  <input type="text" class="form-control inp" id="disabledInput" value="{{$cusinfo->name}}" disabled>
                  </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">Month:</label>
                    <div class="col-sm-10 ">
                      {{-- <input type="text" class="form-control inp1" value="{{$month}}" name="month" required> --}}
                      <select name="month" class="form-control" required>
                        <option value="{{$month}}" selected="">{{$month}}</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="col-sm-2 control-label">Year:</label>
                    <div class="col-sm-10 ">
                      <input type="number" class="form-control inp" value="{{$year}}" name="year" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="col-sm-2 control-label">Taka:</label>
                    <div class="col-sm-10 ">
                      <input type="number" class="form-control inp1" value="{{$amount}}" name="amount" required>
                    </div>
                  </div>

                  <input type="hidden" class="form-control inp1"  value="{{$cusinfo->id}}" name="cusinfo_id" >

                  <input type="hidden" name="date" value="{{ date("d/m/y") }}">
                  {{-- <input type="hidde" class="form-control inp1"  name="{{$date}} " required> --}}



                  {{-- <button type="submit" class="btn btn-primary pull-right" oneclick="payment()" >Payment</button>  --}}
                  <a class="btn btn-success putt-right" data-toggle="modal" href="#myModal">
                   pay
                </a>
                 <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">payment check</h4>
            </div>
            <div class="modal-body">
              <p>name: {{$cusinfo->name}} , account no: {{$cusinfo->accountno}}</p>
             <p> are you sure pay this account </p>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
              <button type="submit" class="btn btn-success" >payment</button>
            </div>
          </div>
        </div>
      </div>
                </form>
            </div>
          </section>
         
        </div>
      </div>
      <!-- Basic Forms & Horizontal Forms-->

     
      <!-- page end-->
    </section>
  </section>
  
    
@endsection