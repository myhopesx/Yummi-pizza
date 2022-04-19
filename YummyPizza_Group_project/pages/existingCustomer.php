<?php

$dns2 = "mysql:host=localhost;dbname=cpit-405";
$username2 = "root";
$password2 = "Amaali0707";
$message2 = "";


try {
    $db2 = new PDO($dns2, $username2, $password2);

    if (isset($_POST['login'])) {
        if (!empty($_POST['LoginPhoneNumber']) && !empty($_POST['Loginpassword'])) //it is not empty
        {

            // DB checks and insert

            // prepare statemnet 
            $loginstatement = $db2->prepare("select * from customer where (phoneNumber=?) and (Password=?)");
            $loginstatement->bindParam(1, $_POST['LoginPhoneNumber']);
            $loginstatement->bindParam(2, $_POST['Loginpassword']);
            // excute statment 
            $loginstatement->execute();


            // fecthing

            $existingCustomer = $loginstatement->fetch();

            if ($loginstatement->rowCount() > 0) {
                session_start();
                $_SESSION['Name'] = $existingCustomer['Name'];
                $_SESSION['PhoneNumber'] = $existingCustomer['phoneNumber'];

                // redirect the browser
                header("Location:MenuPage.php");
            } else {
                $message2 = "You don't have an account!";
            }
        } else {
            $message2 = "please fill in all the fields";
        }
    } else {

        $message = " ";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
