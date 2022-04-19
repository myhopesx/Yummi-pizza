<?php

$dns = "mysql:host=localhost;dbname=cpit-405";
$username = "root";
$password = "Amaali0707";
$message1 = "";

try {

    $db = new PDO($dns, $username, $password);

    if (isset($_POST['Register'])) {
        if (
            !empty($_POST['Name']) && !empty($_POST['EmailAddress']) && !empty($_POST['password']) && !empty($_POST['Regpassword'])
            && !empty($_POST['PhoneNumber']) && !empty($_POST['gender']) && !empty($_POST['city']) //it is not empty
        ) {


            // name 
            $name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);

            // email
            if (filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL) === false) {
                $message1 = "Please Enter correct Email";
            } else {

                if ($_POST['password'] != $_POST['Regpassword']) {
                    $message1 = "Passowrds are not the same, re-enter correct one please!";
                } else {

                    // check phonenumber
                    if (strlen($_POST['PhoneNumber']) < 10 || !ctype_digit($_POST['PhoneNumber'])) {
                        $message1 = "Please Enter correct Phone number";
                    } else {

                        // DB checks and insert

                        // prepare statemnet 
                        $statement = $db->prepare("select * from `customer` where phoneNumber=" . $_POST['PhoneNumber'] . ";");

                        // excute statment 
                        $statement->execute();

                        // fecthing
                        $newCustomer=$statement->fetch();
                            
                        if ($statement->rowCount() > 0) {
                            $message1="You already have an account";
                        } else {

                                $insertQ = "INSERT INTO`customer`(`Name`, `Email`, `Password`, `phoneNumber`, `Gender`, `City`, `address`)
                             VALUES ('" . $name . "','" . $_POST['EmailAddress'] . "','" . $_POST['password'] . "','" . $_POST['PhoneNumber'] . "','" . $_POST['gender'] . "','" . $_POST['city'] . "','" . $_POST['comment'] . "')";

                                $insertStatement = $db->prepare($insertQ);
                                $insertStatement->execute();

                                // start the session 
                                session_start();
                                $_SESSION['Name'] = $name;
                                $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];

                                // redirect the browser
                                header("Location:MenuPage.php");
                        }
                    }
                }
            }
        } else {
            $message1 = "please fill in all the fields";
        }
    } else {

        $message1 = "";
    }
} catch (Exception $e) {

    $error_meassage = $e->getMessage();
    echo "<h1> Error Message : $error_meassage </h1>";
}
