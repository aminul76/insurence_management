@extends('superadmin.admin_master')

@section('content')
<section id="main-content">
    <section class="wrapper">
<section class="panel">
    <div class="panel-body bio-graph-info">
      <h1 class="text-center"> Password Change </h1>
        @foreach ($customer as $customer)
        <h1 class="text-center">  Email: {{$customer->email}} </h1>

        @endforeach
 @include('superadmin.include.msg')
        <form method="POST" action="{{ route('adminpasswordupdate') }}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="old_password">Old Password : </label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" id="old_password" class="form-control" placeholder="Enter your old password" name="old_password">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password">New Password : </label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" id="password" class="form-control" placeholder="Enter your new password" name="password">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="confirm_password">Confirm Password : </label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" id="confirm_password" class="form-control" placeholder="Enter your new password again" name="password_confirmation">
                        </div>
                    </div>
                </div>
            </div>



            <div class="row clearfix">
                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
  </section>
</section>
</section>

@endsection