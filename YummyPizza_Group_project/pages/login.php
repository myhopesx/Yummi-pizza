<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    include('newCustomer.php');
    include('existingCustomer.php');
    ?>


    <!-- ----------------------------------------End of PHP ---------------------------------------------------- -->

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width">
    <!-- CSS Files -->
    <link rel="stylesheet" href="../styles/loginStyle.css">
    <script type="text/javascript" src="../js/login.js" <?php echo time(); ?>></script>



</head>

<body>
    <div class="body">
        <div class="main">
            <!-- Page Header -->
            <section class="page_header">
                <div class="container">
                    <div class="row">
                        <div class="cell text-center">
                            <h2 class="text-uppercase">Account</h2>
                            <p>Please login or signup to continue with your purchase</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Account Content -->
            <section class="shop-content">
                <div class="container">
                    <div class="row">
                        <div class="cell">
                            <div class="row shop-login">
                                <table class="table">
                                    <tr>
                                        <th>
                                            <h3 class="text-center">Existing Customer</h3>

                                        <th>
                                            <h3 class="text-center">Register An Account</h3>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="content">

                                                    <!-- -------------------------Login-------------------------------- -->
                                                    <br>
                                                    <form class="logregform" action="" method="POST" onsubmit="return sure();">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>Enter your phone Number to login </label>
                                                                    <input type="text" id="LoginPhoneNumber" name="LoginPhoneNumber" onfocus="mesg1(0,0)" onblur="mesg1(0,2)" value="" class="form-control"><span></span><br><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>Password</label>
                                                                    <input type="password" id="Loginpassword" name="Loginpassword" onfocus="mesg1(1,1)" onblur="mesg1(1,2)" value="" class="form-control"><span></span><br><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="row">
                                                            <div class="cellTow">
                                                                <span class="remember-box checkbox">
                                                                    <label for="rememberme">
                                                                        <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <div class="cellTow">
                                                                <button type="submit" class="btn btn-default pull-right" name="login">Login</button><br>
                                                                <h6 style="color:red;font-size:1.2rem;"><?php echo $message2; ?></h6>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="content">


                                                    <!----------------------------------------Register------------------------ -->

                                                    <br>
                                                    <form class="logregform" method="POST" onsubmit="return sure();" action="" onreset="notsure();">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>Name</label>
                                                                    <input type="text" id="Name" name="Name" onfocus="mesg2(3,0)" onblur="mesg2(3,8)" value="" class="form-control"><span></span><br>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>E-mail Address</label>
                                                                    <input type="text" id="EmailAddress" name="EmailAddress" onfocus="mesg2(4,1)" onblur="mesg2(4,8)" value="" class="form-control"><span></span><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cellTow">
                                                                    <label>Password</label>
                                                                    <input type="password" id="password" name="password" onfocus="mesg2(5,2)" onblur="mesg2(5,8)" value="" class="form-control"><span></span><br>
                                                                </div>
                                                                <div class="cellTow">
                                                                    <label>Re-enter Password</label>
                                                                    <input type="password" id="Repassword" name="Regpassword" onfocus="mesg2(6,3)" onblur="mesg2(6,8)" value="" onchange="validatePassword(event)" class="form-control"><span></span><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>Phone Number</label>
                                                                    <input type="text" id="PhoneNumber" name="PhoneNumber" onfocus="mesg2(7,4)" onblur="mesg2(7,8)" value="" onkeyup="validatePhone(event)" class="form-control"><span></span><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <label>Gender</label><br>
                                                                    <input type="radio" id="male" name="gender" value="male" onfocus="mesg2(8,5)" onblur="mesg2(8,8)">
                                                                    <label for="male">Male</label>
                                                                    <input type="radio" id="female" name="gender" value="female" onfocus="mesg2(8,5)" onblur="mesg2(8,8)">
                                                                    <label for="female">female</label>
                                                                    <span></span><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <!--  drop down mune-->
                                                                    <label for="cityMune">Select a
                                                                        City:</label>
                                                                    <select name="city" id="c1" onfocus="mesg2(9,6)" onblur="mesg2(9,8)">
                                                                        <option value="j">Jeddah</option>
                                                                        <option value="m">Makkah</option>
                                                                    </select><span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix space20"></div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="cell">
                                                                    <h5>Describe your address
                                                                    </h5>
                                                                    <textarea rows="5" cols="50" name="comment" onfocus="mesg2(10,7)" onblur="mesg2(10,8)"></textarea><span></span><br />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="cell">
                                                                    <div class="space20"></div>


                                                                    <button type="submit" class="btn btn-default pull-right" name="Register">Register</button>
                                                                    <button type="reset" class="btn btn-default pull-right" name="Register" style="margin-right:2rem;">cancel</button>
                                                                    <h6 style="color:red;font-size:1.2rem;"><?php echo $message1; ?></h6>


                                                                </div>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer-->
            <section class="footer">
                <div class="container">
                </div>
                <!-- Footer - Copyright -->
                <div class="footer-copyrights">
                    <div class="container">
                        <div class="row">
                            <div class="cell">
                                <p><i class="fa fa-copyright"></i> 2021 All rights reserved to Group 7</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




</body>

</html>