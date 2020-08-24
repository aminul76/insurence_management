@extends('superadmin.admin_master')
@section('content')
<section id="main-content">
    <section class="wrapper">
    @include('superadmin.include.msg') 
      <!-- Basic Forms & Horizontal Forms-->
     
      <form action="{{route('admin.storecustomer')}}" method="POST" enctype="multipart/form-data" class="panel"  > 
        @csrf
        <div class="form-row ">
           <div class="form-group col-md-4 ">
            <label for="name">Name</label> 
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Mobile Number</label> 
                <input type="number" class="form-control" id="inputEmail4" name="phone" placeholder="Mobile Number">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Nid</label> 
                <input type="number" class="form-control" id="nid" name="nid" placeholder="Nid">
            </div> 
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Current Address</label> 
            <input type="text" class="form-control" id="inputEmail4" name="c_address" placeholder="Current Address">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">permanet Address</label> 
            <input type="text" class="form-control" id="inputpermanet Address4" name="p_address" placeholder="permanet Address">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">photo</label> 
            <input type="text" class="form-control" id="inputphoto4" name="photo" placeholder="photo">
        </div> 
        <h3 class="text-center">Customer mail & Password </h3>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                 <label for="email">Email</label> 
                 <input type="email" class="form-control" id="email" name="email" placeholder="email">
             </div>
             <div class="form-group col-md-6">
                 <label for="password">Password</label> 
                 <input type="text" class="form-control" id="password" name="password" placeholder="Password">
             </div>
            
         </div>
        <input type="hidden" class="form-control" name="accountno" value="{{$accountno}}" >

    </div>
    <button type="submit" class="btn btn-primary">Submit Form</button> 
      </form>


     
     

     
      <!-- page end-->
    </section>
  </section>
@endsection