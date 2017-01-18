@extends('default')
@section('content')

<!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading" style="margin-bottom:50px;">Our Merchandise </h3>
                </div>
            </div>
            <div class="row">
                <table width="100%" border="0">
                    <tr>
                      <?php foreach($MerchandiseController as $row): ?>
                        <td align="center" width="300px">
                            <img src="{{ URL::to('files/'.$row->image) }}" width="300px" height="300px"><br><br><br>
                            <b><?=$row->name?></b><br>
                            <b>Harga : <?=$row->price?></b><br>
                            <?=str_limit($row->description, 100)?><br><br><br>
                            <a href="{{ URL::to('detailmerchandise/'.$row->id) }}"><button class="btn btn-primary">Detail</button></a><br><br>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                </table>
                <center>{{ $MerchandiseController->links() }}</center>
            </div>
        </div>
    </section>
@stop
