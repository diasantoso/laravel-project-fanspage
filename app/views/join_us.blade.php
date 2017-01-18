@extends('default')
@section('content')

@if(Session::has('gagal'))
 echo "<script type='text/javascript'>alert('Maaf username/password anda salah')</script>";
@endif
    <!-- About Section -->
    <section id="about" style="background-color: #333838; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">More Info Or You Interesting ? </h3>
                </div>
            </div>
            <div class="row">
              <?php $messages = $errors->all('<p
              	style="color:red">:message</p>') ?>
              <?php
              	foreach ($messages as $msg)
              	{ echo $msg;}
              ?>
              <form method="post" enctype="multipart/form-data">
                <table width="50%" align="Left" border="1" style="margin-top:50px;">
                 <tr >
                    <td style="padding-left:50px;"> <br><br><b>Register Your Account</b>
                        <table width="90%" align="Left" border="0" style="margin-top:20px;">
                            <tr>
                                <td height="73"><label> Fullname </label></td>
                              <td><input type="text" name="fullname" placeholder="Fullname" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="74"><label> Email </label></td>
                              <td><input type="email" name="email" placeholder="Email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="74"><label> Country </label></td>
                              <td><input type="text" name="country" placeholder="Email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="74"><label> Username </label></td>
                              <td><input type="text" name="username" placeholder="username" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="77"><label> Password </label></td>
                              <td><input type="password" name="password" placeholder="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="77"><label> Image </label></td>
                              <td><input type="file" name="image" placeholder="Image" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="59"></td>
                              <td><input type="submit" name="submit" value="Register" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </td>
                 </tr>
                </table>
                </form>

                <form action="{{ URL::to('auth/loginuser') }}" method="post" enctype="multipart/form-data">
                <table width="47%" align="Right" border="1" style="margin-top:50px;">
                 <tr >
                    <td style="padding-left:50px;"> <br><br><b>Sign In With Your Account</b>
                        <table width="90%" align="Left" border="0" style="margin-top:20px;">
                            <tr>
                                <td height="74"><label> Username </label></td>
                              <td><input type="text" name="username" placeholder="username" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="77"><label> Password </label></td>
                              <td><input type="password" name="password" placeholder="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="59"></td>
                              <td><input type="submit" name="submit" value="Sign In" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </td>
                 </tr>
                </table>
                </form>

            </div>
        </div>
    </section>


@stop
