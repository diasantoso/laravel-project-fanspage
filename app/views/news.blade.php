@extends('default')
@section('content')

<!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading" style="margin-bottom:50px;">Hot News </h3>
                </div>
            </div>
            <div class="row">

                <table width="100%" border="0">
                    <tr>
                      <?php foreach($NewsController as $row): ?>
                        <td align="center" width="300px">
                            <img src="{{ URL::to('files/'.$row->image) }}" width="300px" height="200px"><br><br><br>
                            <b><?=$row->title?></b><br>
                            <?=str_limit($row->content, 100)?><br><br><br>
                            <a href="{{ URL::to('detailnews/'.$row->id) }}"><button class="btn btn-primary">Read more</button></a><br><br>
                        </td>
                      <?php endforeach; ?>
                    </tr>
                </table>
                <center>{{ $NewsController->links() }}</center>
            </div>
        </div>
    </section>
@stop
