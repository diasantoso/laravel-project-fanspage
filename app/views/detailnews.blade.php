@extends('default')
@section('content')

<!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading" style="margin-bottom:50px;">Detail News </h3>
                </div>
            </div>
            <div class="row">

                <table width="100%" border="0" class="tbl tbl-responsive">
                    <tr>
                        <td align="center">
                            <img src="{{ URL::asset('files/'.$data->image) }}" width="60%"><br><br>
                            <h3><b>{{ $data->title }}</b></h3><br><br><br>
                            <div style="text-align: justify;">{{ $data->content }}</div>

                            <br><br><br><br>

                            <p align="left"><h4 align="left"><b> Leave Comment </b></h4></p><br>
                            @if(!Auth::check())
                              	<p align="left"><b>You Must <a href="{{ URL::to('join_us') }}"> Login </a> First </b></p><br>
                            @else
                                <p align="left"><h4 align="left"><b> Hello , {{ Auth::user()->fullname }}.</b></h4></p><hr>
                              <form method="post" enctype="multipart/form-data">
                                    <textarea id="comments" name="comments" style="margin-left:-740px; color:#000" cols="50" rows="5"></textarea>
                                    <br><br>
                                    <input type="submit" name="submit" style="margin-left:-385px;" class="btn btn-info btn-sm" value="Submit"/>
                           	  </form>
                            @endif
                            <br><br>
                            <p align="left"><h4 align="left"><b> Comment Display</b></h4></p><hr><br>

                             <table width="700" border="0" style="margin-left:-500px;">
                              <?php foreach($CommentsController as $row): ?>
                                     <tr height="110">
                                       <td width="113" align="center"><img src="{{URL::to('files/'.$row->image)}}" width="80" height="80"/>
                                       </td>
                                       <td width="571">
                                       <font size="+1"><b><?=$row->fullname?></b></font><br />
                                       <font size="-2"><?=$row->tanggal?></font><br />
                                       <?=$row->comments?><br /><br /><br />
                                       </td>
                                      </tr>
                                     <?php endforeach; ?>
                             </table>
                             <p align="left"><h4 align="left"><b>{{ $CommentsController->links() }}</b>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </section>

@stop
