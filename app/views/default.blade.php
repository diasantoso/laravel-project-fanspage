<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Real Madrid C.F Official Fanspage </title>
    <link href='{{ URL::asset('assets/img/logo.png') }}' rel='shortcut icon'>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	{{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- Custom CSS -->
    <!--<link href="css/agency.css" rel="stylesheet">-->
	{{ HTML::style('assets/css/agency.css') }}

    <!-- Custom Fonts -->

	{{ HTML::style('assets/css/font-awesome.min.css') }}
  {{ HTML::style('assets-login/font-awesome/css/font-awesome.min.css') }}
  {{ HTML::style('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Kaushan+Script') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') }}
</head>

<body id="page-top" class="index">
      <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top bgmenu">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Real Madrid C.F</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a href="{{ URL::to('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('index#service') }}">Profile</a>
                    </li>
                     <li>
                        <a href="{{ URL::to('news') }}">News</a>
                    </li>
                    <li>
                       <a href="{{ URL::to('merchandise') }}">Merchandise</a>
                   </li>
                    <li>
                        <a href="{{ URL::to('join_us') }}">Join Us</a>
                    </li>
                     <li>
                        <a href="{{ URL::to('index#team') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('index#contact') }}">Contact</a>
                    </li>
                    @if(Auth::check())
                    <li>
                            <a class="page-scroll" href="{{ URL::to('auth/logoutuser') }}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

@yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Babarsari Dev. Team</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


	<!-- jQuery -->
	{{ HTML::script('assets/js/jquery.js') }}

    <!-- Bootstrap Core JavaScript -->
	{{ HTML::script('assets/js/bootstrap.min.js') }}

    <!-- Plugin JavaScript -->
	{{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}
	{{ HTML::script('assets/js/classie.js') }}
	{{ HTML::script('assets/js/cbpAnimatedHeader.js') }}

    <!-- Contact Form JavaScript -->
	{{ HTML::script('assets/js/jqBootstrapValidation.js"') }}
	{{ HTML::script('assets/js/contact_me.js') }}

    <!-- Custom Theme JavaScript -->
	{{ HTML::script('assets/js/agency.js') }}
  {{ HTML::script('assets/js/agency.min.js') }}
</body>

</html>
