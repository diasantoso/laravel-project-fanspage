@extends('default')
@section('content')

<!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading" style="margin-bottom:50px;">Detail Merchandise </h3>
                </div>
            </div>
            <div class="row">

                <table width="100%" border="0" class="tbl tbl-responsive">
                    <tr>
                        <td align="center">
                            <img src="{{ URL::asset('files/'.$data->image) }}" width="60%"><br><br>
                            <h3><b>{{ $data->name }}</b></h3><br><br><br>
                            <h3><b>Harga : Rp {{ $data->price }},-</b></h3><br><br><br><br>
                            <h3><b>{{ $data->description }}</b></h3>
                            <h3><b>CP : 081234567890</b></h3>
                            <h3><b>Hubungi Nomor diatas untuk pembelian lebih lanjut</b></h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

@stop
