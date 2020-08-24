@extends('customers.customer_master')

@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_documents_alt"></i>Pages</li>
            <li><i class="fa fa-user-md"></i>Profile</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <!-- profile-widget -->
        <div class="col-lg-12">
          <div class="profile-widget profile-widget-info">
            <div class="panel-body">
              @foreach ($cusinfos as $cusinfo)
              <div class="col-lg-2 col-sm-2">
                <h4>{{$cusinfo->name}}</h4>
                <div class="follow-ava">
                  <img src="img/profile-widget-avatar.jpg" alt="{{$cusinfo->name}}">
                </div>
                <h6></h6>
              </div>
             
             
              <div class="col-lg-4 col-sm-4 follow-info">
                <p>Name: {{$cusinfo->name}}</p>
               
               

                <h5>
                <span><i class="icon_pin_alt"></i>Permanet Address: {{$cusinfo->p_address}}</span><br>
                <span><i class="icon_pin_alt"></i>Current Address: {{$cusinfo->c_address}}</span>

                </h5>
              </div>
              @endforeach
              <div class="col-lg-2 col-sm-6 follow-info weather-category">
                <ul>
                  <li class="active">

                    <i class="fa fa-university fa-2x"> </i><br>
                    <p>Account Number: <br>
                       {{$cusinfo->accountno}}</p>
                  </li>

                </ul>
              </div>
              <div class="col-lg-2 col-sm-6 follow-info weather-category">
                <ul>
                  <li class="active">

                    <i class="fa fa-phone fa-2x"> </i><br> 
                    <p>Phone: <br>
                      {{$cusinfo->phone}}</p>
                  </li>

                </ul>
              </div>
              <div class="col-lg-2 col-sm-6 follow-info weather-category">
                <ul>
                  <li class="active">

                    <i class="fa fa-envelope fa-2x"> </i><br>
                    <p>Email: <br>
                      {{$cusinfo->email}}</p>
                     
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page start-->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading tab-bg-info">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#recent-activity">
                                        <i class="icon-home"></i>
                                        Daily Activity
                                    </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#profile">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                </li>
                <li class="">
                  <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                </li>
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content">
                <div id="recent-activity" class="tab-pane active">
                  <div class="profile-activity">
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                          <p>It is a long established fact that a reader will be distracted layout</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th Octmber 2014</p>
                          <p>Knowledge speaks, but wisdom listens.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                            eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Knowledge speaks, but wisdom listens.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                      </div>
                    </div>
                    <div class="act-time">
                      <div class="activity-body act-in">
                        <span class="arrow"></span>
                        <div class="text">
                          <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                          <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                            eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- profile -->
                <div id="profile" class="tab-pane">
                  <section class="panel">
                    @foreach ($cusinfos as $cusinfo)
                        
                   
                    <div class="bio-graph-heading">
                    </div>
                    <div class="panel-body bio-graph-info">
                      <h1>Bio Graph</h1>
                      <div class="row">
                        <div class="bio-row">
                          <p><span> Name </span>: {{$cusinfo->name}} </p>
                        </div>
                        <div class="bio-row">
                          <p><span> Account Number </span>: {{$cusinfo->accountno}}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Permanet Address</span>:  {{$cusinfo->p_address}}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Current Address </span>: {{$cusinfo->c_address}}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Phone </span>:  {{$cusinfo->phone}}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Email </span>: {{$cusinfo->email}}</p>
                        </div>
                       
                       
                      </div>
                    </div>
                    @endforeach
                  </section>
                  <section>
                    <div class="row">
                    </div>
                  </section>
                </div>
                <!-- edit-profile -->
                <div id="edit-profile" class="tab-pane">
                  <section class="panel">
                    <div class="panel-body bio-graph-info">
                      <h1> Profile Info</h1>
                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label class="col-lg-2 control-label">First Name</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="f-name" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Last Name</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="l-name" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">About Me</label>
                          <div class="col-lg-10">
                            <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Country</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="c-name" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Birthday</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="b-day" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Occupation</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="occupation" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="email" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Mobile</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="mobile" placeholder=" ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Website URL</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!-- page end-->
    </section>
  </section>
@endsection



