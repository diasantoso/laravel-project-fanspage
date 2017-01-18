@extends('administrator/default')
@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-home"></i>
          <h3 class="box-title">VIEW POST : </h3>
          <div class="pull-right box-tools">
          </div>
        </div>
        <div class="box-body">

          <table id="example" class="display">
          <thead>
              <tr>
                  <th width="23%">Name</th>
                  <th width="50%">Description</th>
                  <th width="23%">Price</th>
                  <th width="10%">Image</th>
                  <th width="8%">Action</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($MerchandiseController as $row): ?>
                <tr>
                  <td width="23%"><?=$row->name?></td>
                  <td width="50%"><?=str_limit($row->description, 100)?></td>
                  <td width="23%"><?=$row->price?></td>
                  <td width="10%"><img src="{{ URL::to('files/'.$row->image) }}" width="100" height="80" /></td>

                  <td>
                  <table aligncenter>
                    <tr>
                      <td>
                        <a href="{{ URL::to('editmerchandise/'.$row->id) }}"><img src="{{ asset('asssets/dist/img/update.png') }}" onClick="return confirm('Apakah anda yakin akan Mengedit data ini ?')"></a>
                      </td>
                      <td width="10px"></td>
                      <td>
                            <a href="{{ URL::to('deletemerchandise/'.$row->id) }}">
                                <img src="{{ asset('asssets/dist/img/hapus.png') }}" onClick="return confirm('Apakah anda yakin akan Menghapus data ini ?')">
                            </a>
                      </td>
                    </tr>
                  </table>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>

        </div>
        <div class="box-footer clearfix"></div>
      </div>
  </div>
</section>
@stop
+
