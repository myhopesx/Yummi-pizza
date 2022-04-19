<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/cartPageStyle.css?v=<?php echo time(); ?>">

</head>

<body>

    <section id="Home">
        <div class="nav">

            <ul>
                <a href="#" class="logo">
                    <li> YummyPizza</li>
                </a>
                <a href="index.php">
                    <li> Home</li>
                </a>
                <a href="Aboutus.html">
                    <li> About Us </li>
                </a>
                <a href="MenuPage.php">
                    <li> Menu </li>
                </a>
                <form action="login.php">
                    <input type="submit" value="Reservation">
                </form>
                <a href="cart.php" id="cart">
                    <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                </a>
            </ul>

        </div>


        <div class="banner-content">
            <h1> Cart </h1>


        </div>

    </section>

    
    <section id="main-menu">

        <div class="menu-content">
            <h1> Your Order </h1>

            <table>
                <tbody>
                    <tr>
                        <td>
                            <h2> Pizaa </h2>
                        </td>

                        <td>
                            <h2> Quantity </h2>
                        </td>

                        <td>
                            <h2> Price </h2>
                
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3> Margherita </h3>
                        </td>

                        <td>
                            <h3> 0 </h3>
                        </td>

                        <td>
                            <h3> 00SR </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3> Total Price </h3>
                        </td>
                        <td>
                            <h3>             </h3>
                        </td>
                        <td>
                            <h3> 00SR </h3>
                        </td>
                    </tr>

                </tbody>
                
            </table>
            <form action="login/login.html">
                <input type="submit" value="Cancel" name="HomeButton">
            </form>

        </div>
        <div class="confirm">
            <form action="login/login.html">
                <input type="submit" value="Confirm order" name="HomeButton">
            </form>

        </div>
        
    </section>


    <footer id="HomePagefooter">
        
        <h1> YummyPizza </h1>
        <table>
            <tbody>
                <tr> 
                    <td><p>Contact Info</p></td>
                    <td><i class="fa fa-phone" aria-hidden="true"></i>
                        +996-559572634 </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>

                            Jeddah </td>
                </tr>

                <tr> 
                    <td><p> Openning Hour </p></td>
                    <td> Sunday-Thurday</td>
                    <td> Friday</td>
                </tr>
                <tr> 
                    <td></td>
                    <td> 10:00 AM - 12:00 AM</td>
                    <td> 12:00 PM - 02:00 AM</td>
                </tr>

            </tbody>
        </table>

    </footer>

</body>

</html>