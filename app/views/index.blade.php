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

  {{ HTML::script('assets-slider/js/jquery-1.11.3.min.js') }}
  {{ HTML::script('assets-slider/js/jssor.slider-21.1.6.mini.js') }}
  <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
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
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ URL::to('news') }}">News</a>
                    </li>
                    <li>
                       <a class="page-scroll" href="{{ URL::to('merchandise') }}">Merchandise</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Join Us</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#team">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
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

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text" >
                <div class="intro-lead-in">Welcome To Official Page of Real Madrid C.F!</div>
                <div class="intro-heading">HALA MADRID</div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <p align="center"><img src="{{ URL::asset('assets/img/logo.png') }}" class="img-responsive img-circle" alt=""></p>
                    <h3 class="section-heading">Profile Club</h3>
                </div>
            </div>
            <div class="row text-center">
                Real Madrid Club de Fútbol commonly known as Real Madrid, or simply as Real outside Spain frontiers, is a professional football club based in Madrid, Spain.
            </div>
			      <br>
			      <div class="row text-center">
				        Founded in 1902 as Madrid Football Club, the team has traditionally worn a white home kit since inception. The word Real is Spanish for Royal and was bestowed to the club by King Alfonso XIII in 1920 together with the royal crown in the emblem. The team has played its home matches in the 85,454-capacity Santiago Bernabéu Stadium in downtown Madrid since 1947. Unlike most European sporting entities, Real Madrid's members (socios) have owned and operated the club throughout its history.
			      </div>
            <br>
			      <div class="row text-center">
				        The club is the most valuable sports team in the world, worth €3.24 billion ($3.65 billion) and the world's highest-earningfootball club for 2014–15, with an annual revenue of €577 million. The club is one of the most widely supported teams in the world. Real Madrid is one of three founding members of the Primera División that have never been relegated from the top division, along with Athletic Bilbao and Barcelona. The club holds many long-standing rivalries, most notably El Clásico with Barcelona and the El Derbi madrileño with Atlético Madrid.
			      </div>
            <br>
			      <div class="row text-center">
                Real Madrid established itself as a major force in both Spanish and European football during the 1950s, winning five consecutive European Cups and reaching the final seven times. This success was replicated in the league, where the club won five times in the space of seven years. This team, which consisted of players such as Alfredo Di Stéfano, Ferenc Puskás, Francisco Gento, Raymond Kopa, and José Santamaría, is considered by some in the sport to be the greatest team of all time.
			      </div>
            <br>
			      <div class="row text-center">
                In domestic football, the club has won a record 32 La Liga titles, 19 Copa del Rey, nine Supercopa de España, a Copa Eva Duarte, and a Copa de la Liga. In international football, the club has won a record 11 European Cup/UEFA Champions League titles, a joint record three Intercontinental Cups, two UEFA Cups, three UEFA Super Cups and a FIFA Club World Cup.
			      </div>
            <br>
			      <div class="row text-center">
                Real Madrid was recognised as the FIFA Club of the 20th Century on 23 December 2000, and named Best European Club of the 20th Century by the IFFHS on 11 May 2010. The club received the FIFA Centennial Order of Merit in 2004. The club is ranked first in the latest IFFHS Club World Ranking, setting a new ranking-points record. The club also leads the current UEFA club rankings.
			      </div>
		</div>
    </section>

    <!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Are you interesting with us ? </h3>
                </div>
            </div>
            <div class="row">
            	<p align="center" style="margin-top:150px; margin-bottom:150px;">
            	<a href="{{ URL::to('join_us') }}"><button class="btn btn-primary btnpad"> Join Us For More Information </button></a></p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" style="background-color: #333838; color: #FFF;">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h3 class="section-heading" style="margin-bottom:50px;">Gallery</h3>
              </div>
          </div>
          <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 556px; overflow: hidden; visibility: hidden; background-color: #24262e;">
              <!-- Loading Screen -->
              <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                  <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
              </div>
              <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 456px; overflow: hidden;">
                  <div data-p="144.50">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/01.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-01.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/02.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-02.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/03.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-03.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/04.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-04.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/05.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-05.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/06.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-06.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/07.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-07.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/08.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-08.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/09.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-09.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/10.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-10.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/11.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-11.jpg') }}" />
                  </div>
                  <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="{{ URL::asset('assets-slider/img/12.jpg') }}" />
                      <img data-u="thumb" src="{{ URL::asset('assets-slider/img/thumb-12.jpg') }}" />
                  </div>
                  <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
              </div>
              <!-- Thumbnail Navigator -->
              <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                  <!-- Thumbnail Item Skin Begin -->
                  <div data-u="slides" style="cursor: default;">
                      <div data-u="prototype" class="p">
                          <div class="w">
                              <div data-u="thumbnailtemplate" class="t"></div>
                          </div>
                          <div class="c"></div>
                      </div>
                  </div>
                  <!-- Thumbnail Item Skin End -->
              </div>
              <!-- Arrow Navigator -->
              <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
              <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
          </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Contact Us</h3>
                    <h3 class="section-subheading text-muted">More Information, Just Contact Us </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name *" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="telp" class="form-control" placeholder="Your Phone *" id="phone" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan" placeholder="Your Message *" id="message" required="required"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" name="submit" value="Send Message" class="btn btn-xl">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
