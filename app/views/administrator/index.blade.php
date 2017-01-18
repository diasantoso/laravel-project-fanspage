<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Real Madrid Admin-Site</title>
        <link href='{{ URL::asset('assets/img/logo.png') }}' rel='shortcut icon'>

        <!-- CSS -->
        {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500') }}
        {{ HTML::style('assets-login/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('assets-login/font-awesome/css/font-awesome.min.css') }}
        {{ HTML::style('assets-login/css/form-elements.css') }}
        {{ HTML::style('assets-login/css/style.css') }}

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

    @if(Session::has('gagal'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Gagal! </strong> {{ Session::get('message', '') }}
    </div>
    @endif

        <!-- Top content -->
        <div class="top-content headertext">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                          <p align="center"><img src="{{ URL::asset('assets/img/logo.png') }}" width="10%" heigth="10%" class="img-responsive img-circle" alt=""></p>
                            <h1><strong>Real Madrid Fanspage</strong> | Login Form</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Real Madrid Administrator</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form action="{{ URL::to('auth/login') }}" method="post" enctype="multipart/form-data">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="description">
                            	<p>
	                            	 Copyright © 2016. Babarsari Dev. Team | All Right Reserved
                            	</p>
                            </div>
                        </div>
                       </div>
                </div>
            </div>
        </div>
        </body>
        <!-- Javascript -->
        {{ HTML::script('assets-login/js/jquery-1.11.1.min.js') }}
        {{ HTML::script('assets-login/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('assets-login/js/jquery.backstretch.min.js') }}
        {{ HTML::script('assets-login/js/scripts.js') }}
</html>
