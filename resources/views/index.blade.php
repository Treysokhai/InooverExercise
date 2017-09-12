<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/adminCss/bootstrap.css')}}">

        <link href="{{asset('css/adminCss/fontawesome.css')}}" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/adminCss/styleadmin.css')}}">
        @yield('style')

    </head>
    <body>
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('admin')}}">Dashboard</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i>
                              <?php
                                if(Session::has('userName')){
                                    echo session('userName');
                                }
                              ?>
                                  
                             <span class="caret"></span></a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-user-secret"></i> My Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>

        <!-- /Header -->

        <!-- Main -->

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

            <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
                <!--<li class="nav-header"></li>-->
                <li><a href="{{url('create')}}"><i class="fa fa-dashboard"></i>New Account</a></li>
            </ul>
        </div><!-- /span-3 -->
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
            <!-- Right -->

            <strong><span class="fa fa-dashboard"></span>@yield('name')</strong>
            <hr>
         
                @yield('content')
        </div>
</body>
<script src="{{asset('js/adminJs/jquery.js')}}"></script>
<script src="{{asset('js/adminJs/bootstrap.js')}}"></script>
@yield('script')
</html>