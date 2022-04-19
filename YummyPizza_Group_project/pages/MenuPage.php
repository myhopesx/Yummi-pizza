<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/MenuPageStyle.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="../js/MenuPage.js"></script>

</head>

<?php

session_start();

?>

<body>
    <section id="Home">
        <div class="nav">

            <ul>
                <a href="index.php" class="logo">
                    <li>YummyPizza</li>
                </a>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="Aboutus.html">
                    <li>About Us</li>
                </a>
                <a href="MenuPage.php">
                    <li>Menu</li>
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
            <h1> Our Menu </h1>

        </div>

        <?php

        if (isset($_SESSION['Name'])) {
            echo "<div class='welcome'>
            <p>Welcome '" . $_SESSION['Name'] . "'</p>
            </div>";
        }
        ?>

    </section>
    <section id="main-menu">
        <div class="menu-content">
            <h1> Our Menu </h1>
            <table>
                <tbody>
                    <?php

                    $db = mysqli_connect("localhost", "root", "Amaali0707", "cpit-405");
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $records = mysqli_query($db, "select * from menu"); // fetch data from database
                    $x = 1;
                    while ($data = mysqli_fetch_array($records)) {
                    ?>
                        <tr>
                            <td>
                                <h3><?php echo $data['pizzaName']; ?></h3>
                            </td>
                            <td>
                                <p><?php echo $data['desc']; ?></p>
                                <p><?php echo $data['price']; ?>SR</p>
                            </td>
                            <td>
                                <div class="counter">
                                    <?php
                                    echo '<button id="btnL" type="button" name="button" onclick="increment(`count'.$x. '`,document.getElementById(`count'.$x.'`).innerHTML)">+</button>';
                                    ?>
                                    <?php
                                    echo '<div id="count' . $x . '"> 0 </div>';
                                    ?>
                                    <?php
                                    echo '<button id="btnR" type="button" name="button " onclick="Decrement(`count'.$x.'`,document.getElementById(`count'.$x.'`).innerHTML)">-</button>';
                                    ?>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $x++;
                    }
                    ?>
                </tbody>
            </table>
            <?php mysqli_close($db); // Close connection 
            ?>
            
            <form action="login.php">
                <input type="submit" value="Order Now" name="HomeButton">
            </form>

        </div>
    </section>

    <section id="after-menu">

        <div class="after-menu-content">

            <h1> Our pizza prepared with love ! </h1>

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
                    <td></td>
                    <td> 10:00 AM - 12:00 AM</td>
                    <td> 12:00 PM - 02:00 AM</td>
                </tr>

            </tbody>
        </table>

    </footer>

</body>

</html>