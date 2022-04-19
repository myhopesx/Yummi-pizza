<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/HomePageStyle.css?v=<?php echo time(); ?>">

    
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
                <a href="aboutus.html">
                    <li> About Us </li>
                </a>
                <a href="MenuPage.php">
                    <li> Menu </li>
                </a>
                <a href="login.php">
                    <input type="button" value="Reservation">
                </a>
                <a href="cart.php" id="cart">
                    <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                </a>
            </ul>

        </div>


        <div class="banner-content">
            <h1> Tasty Passion </h1>
            <p> Best Pizza Ever since 1990</p>
            <form action="#About">
                <input type="submit" value="View More" name="HomeButton">
            </form>
        </div>

    </section>


    <section id="About">

        <div class="About-content">
            <h1>Our story </h1>
            <p>
                We are four friends studying at King Abdulaziz University in the Faculty of Computers
                and Information Technology one day after we got out of one of the difficult exams
                we decided to open a small restaurant specialized in pizza because we love it more than studying.
            </p>
            
               <a href="aboutus.html"> <input type="submit" name="AboutButton" value="learn more"></a>
            

        </div>

        <img src="../images/aboutImage.png">



    </section>


    <section id="menu">

        <div class="menu-content">

            <h1> Our Menu </h1>

            <table>

                <tbody>
                    <tr>
                        <td>
                            <h3> MARGHERITA PIZZA </h3>
                            <p> A Rich Layer of Real Mozzarella.......................................20SR</p>

                        </td>
                        <td>
                            <h3> Veggie</h3>
                            <p>Green Peppers, Onions, Mushrooms..........................................20SR</p>

                        </td>

                    </tr>
                    <!-- SECOND ROW -->
                    <tr>
                        <td>
                            <h3> BBQ Chicken
                            </h3>
                            <p>Grilled Chicken breast, Onions........................................25SR</p>

                        </td>
                        <td>
                            <h3> Chicken Legend Ranch & Jalapenos</h3>
                            <p>Mozzarella, American cheese,Ranch Sauce................................25SR</p>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <h3> Pepperoni</h3>
                            <p> Beef Pepperoni ...............................................................20SR</p>

                        </td>
                        <td>
                            <h3> Dynamite Chicken</h3>
                            <p>Baked Chicken breast................................................................30SR
                            </p>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <h3> Italiano</h3>
                            <p>Italian Sausage, Mozzarella.............................................30SR</p>

                        </td>
                        <td>
                            <h3>Philly Cheese Steak</h3>
                            <p>Slices of Beef
                                Steak....................................................................30SR</p>
                        </td>
                    </tr>

                </tbody>

            </table>
            <form action="MenuPage.php">
                <input type="submit" value="View More" name="HomeButton">
            </form>
            

        </div>
    </section>

    <section id="location">

        <div class="loc-content">

            <h1> Visit us at our restaurant </h1>
            <form action="https://goo.gl/maps/uE33EWRC1pAt1sGC7">
                <input type="submit" value="View More" name="View location">
            </form>

        </div>
    </section>


    <footer id="HomePagefooter">

        <h1> YummyPizza </h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        <p>Contact Info</p>
                    </td>
                    <td><i class="fa fa-phone" aria-hidden="true"></i>
                        +996-559572634 </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>

                        Jeddah </td>
                </tr>

                <tr>
                    <td>
                        <p> Openning Hour </p>
                    </td>
                    <td> Sunday-Thurday</td>
                    <td> Friday</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> 10:00 AM - 12:00 AM</td>
                    <td> 12:00 PM - 02:00 AM</td>
                </tr>

            </tbody>
        </table>

    </footer>

</body>

</html>