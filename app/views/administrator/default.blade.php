<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Real Madrid FP</title>
  <link href='{{ URL::asset('assets/img/logo.png') }}' rel='shortcut icon'>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{ HTML::style('https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css') }}

  {{ HTML::style('asssets/bootstrap/css/bootstrap.min.css') }}
  {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}
  {{ HTML::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}
  {{ HTML::style('asssets/dist/css/Admin.min.css') }}
  {{ HTML::style('asssets/dist/css/skins/_all-skins.min.css') }}
  {{ HTML::style('asssets/plugins/iCheck/flat/blue.css') }}
  {{ HTML::style('asssets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
  {{ HTML::style('assets/css/shCore.css') }}

  {{ HTML::script('asssets/plugins/jQuery/jQuery-2.1.4.min.js') }}
  {{ HTML::script('asssets/bootstrap/js/bootstrap.min.js') }}
  {{ HTML::script('asssets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
  {{ HTML::script('asssets/plugins/slimScroll/jquery.slimscroll.min.js') }}

  {{ HTML::script('asssets/plugins/fastclick/fastclick.js') }}
  {{ HTML::script('asssets/dist/js/app.min.js') }}
  {{ HTML::script('https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js') }}
  {{ HTML::script('asssets/tinymce/tinymce.min.js') }}
  {{ HTML::script('assets/js/shCore.js') }}
  {{ HTML::script('assets/js/demo.js') }}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="{{ URL::to('administrator/dashboard') }}" class="logo">
      <span class="logo-mini"><b>RE</b>AL&nbsp;</span>
      <span class="logo-lg"><b>Admin</b> &nbsp REAL</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="media.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ URL::asset('asssets/dist/img/use.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->fullname }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ URL::asset('asssets/dist/img/use.png') }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->fullname }} - Dashboard System
                  <small>REAL MADRID - 2016</small>
                </p>
              </li>
              <li class="user-footer">
				<div class="pull-left">
                  <a href="{{ URL::to('index') }}" target="_blank" class="btn btn-default btn-flat">LivePreview</a>
                </div>
                <div class="pull-right">
                  <a href="{{ URL::to('auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('asssets/dist/img/use.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fullname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ URL::to('administrator/dashboard') }}"><i class="fa fa-circle-o"></i>Welcome</a></li>
          </ul>
        </li>
        <!--menu 1-->
         <li class="treeview">
          <a href="">
            <i class="fa fa-steam"></i> <span>Setting Post</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ URL::to('administrator/addpost') }}"><i class="fa fa-circle-o"></i>Create New Post</a></li>
            <li class="active"><a href="{{ URL::to('administrator/viewpost') }}"><i class="fa fa-circle-o"></i>View Post</a></li>
          </ul>
        </li>
        <!--menu 2-->
         <li class="treeview">
          <a href="">
            <i class="fa fa-steam"></i> <span>Setting Comment</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ URL::to('administrator/viewcomment') }}"><i class="fa fa-circle-o"></i>View Comment</a></li>
          </ul>
        </li>
        <!--menu 3-->
         <li class="treeview">
          <a href="">
            <i class="fa fa-steam"></i> <span>Setting Merchandise</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ URL::to('administrator/addmerchandise') }}"><i class="fa fa-circle-o"></i>Create New Merchandise</a></li>
            <li class="active"><a href="{{ URL::to('administrator/viewmerchandise') }}"><i class="fa fa-circle-o"></i>View Merchandise</a></li>
          </ul>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Management
        <small>Control panel</small>
      </h1>
    </section>

@yield('content')

  </div>
</div>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
<script type="text/javascript">
tinymce.init({
    selector: "#mytextarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor pagebreak",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<!-- Pengecekan text field angka-->
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;

    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
</script>

</body>
</html>
