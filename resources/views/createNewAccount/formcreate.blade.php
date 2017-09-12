@extends('index')

@section('title','Create New Account')
@section('name','Create New Account')
@section('content')

<!-- Alert Message Success And faile When Insert -->
@foreach (['warning', 'success'] as $msg)
@if(Session::has('alert-' . $msg))
<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
@endif
@endforeach
<!-- Alert Message Error When validation Failed -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
       <p class="alert alert-danger">{{ $error }}
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       </p>
    @endforeach
@endif
<form class="form-horizontal" method="post" action="{{url('addNewAccount')}}">
     {{ csrf_field() }}    
        <div class="form-group">
            <label class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" value="{{ old('firstname') }}" placeholder="First Name" class="form-control" name="firstname" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" value="{{ old('lastname') }}" placeholder="Last Name" class="form-control" name="lastname" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">User Name</label>
            <div class="col-sm-9">
                <input type="text" value="{{ old('username') }}" placeholder="User Name" class="form-control" name="username" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" value="{{ old('email') }}" placeholder="Email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
                <input type="number" value="{{ old('phonenumber') }}" placeholder="Phone Numer" class="form-control" name="phonenumber" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control" name="password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
@endsection 