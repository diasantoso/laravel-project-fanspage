@extends('administrator/default')
@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-home"></i>
          <h3 class="box-title">VIEW COMMENT : </h3>
          <div class="pull-right box-tools">
          </div>
        </div>
        <div class="box-body">

          <table id="example" class="display">
          <thead>
              <tr>
                  <th width="23%">Name</th>
                  <th width="20%">Photo</th>
                  <th width="40%">Comment</th>
                  <th width="30%">Date</th>
                  <th width="8%">Action</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($CommentsController as $row): ?>
                <tr>
                  <td width="23%"><?=$row->fullname?></td>
                  <td width="20%"><img src="{{ URL::to('files/'.$row->image) }}" width="100" height="80" /></td>
                  <td width="40%"><?=str_limit($row->comments, 100)?></td>
                  <td width="30%"><?=$row->tanggal?></td>

                  <td>
                  <table aligncenter>
                    <tr>
                      <td>
                            <a href="{{ URL::to('deletecomment/'.$row->id) }}">
                                <img src="{{ asset('asssets/dist/img/hapus.png') }}" onClick="return confirm('Apakah anda yakin akan Menghapus komentar ini ?')">
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
