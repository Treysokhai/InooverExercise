<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/adminCss/bootstrap.css')}}">
    </head>
    <body>
       
        @if(Session::has('alert-warning'))
        <p class="alert alert-warning">{{ Session::get('alert-warning') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
        <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('login')}}">
                            {{ csrf_field() }}  
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-success btn-block">Login</button>
<!--                                <p>New Member? <a href="signUp.html" class="">Sign up</a></p>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
    <script src="{{asset('js/adminJs/jquery.js')}}"></script>
    <script src="{{asset('js/adminJs/bootstrap.js')}}"></script>
</html>

