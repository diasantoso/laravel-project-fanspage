@extends('administrator/default')
@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-steam"></i>
          <h3 class="box-title">CREATE NEW POST : </h3>
          <div class="pull-right box-tools">
          </div>
        </div>
        <div class="box-body">
        <!-- Content -->
        <form method="post" enctype="multipart/form-data">

          <tr>
              <td height="73"><label> Title </label></td>
            <td><input type="text" name="title" placeholder="Title" class="form-control"></td>
          </tr>
          <tr>
              <td height="73"><label> Content </label></td>
            <td><textarea rows="8" cols="50" input type="text" name="content" placeholder="Content" class="form-control" id="mytextarea"></textarea></td>
          </tr>
          <tr>
              <td height="77"><label> Images </label></td>
            <td><input type="file" name="images" placeholder="Images" class="form-control"></td>
          </tr>
          <br><br>
          <tr>
              <td height="59"></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
          </tr>

        </form>
        </div>
        <div class="box-footer clearfix"></div>
      </div>
  </div>
</section>
@stop
