<?php 
if(isset($_POST['submit'])){  
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['gender'])) {
  $gender = $_POST['gender'];
}
if (isset($_POST['country'])) {
  $country = $_POST['country'];
}
if (isset($_POST['subject'])) {
  $subject = $_POST['subject'];
}
if (isset($_POST['mesage'])) {
  $message = $_POST['message'];
}

// declaration variable
//$corp;
};
echo 'Hello ' .htmlspecialchars($_POST['name']). '. Our team wil do they best to respond you as soon as possible';
//var_dump($_POST);
//(isset($_POST['name']) || (isset($_POST['firstName']) || (isset($_POST['email']) || (isset($_POST['gender']) || (isset($_POST['country']) || (isset($_POST['subject']) || (isset($_POST['message']))))))));{
  // declaration variable
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Confirmation</title>
  </head>
  <body>



    <h2></h2>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>