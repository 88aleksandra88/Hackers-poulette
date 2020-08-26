<?php 

    $gender = $firstname = $lastname = $email =$country =$subject = $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $subject= $_POST["subject"];
        $message= $_POST["message"];
    }


?>