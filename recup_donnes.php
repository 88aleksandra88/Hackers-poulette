<?php
/*$user = 'root';
$pass = '';
try {
  $dbh = new PDO('mysql:host=localhost;dbname=hackers-poulette', $user, $pass);
   foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}*/

// if (isset($_POST['honeypot']) && $_POST['honeypot'] != "")
//   die();

// if (isset($_POST['submit'])) {
//   if (isset($_POST['name'])) {
//     $name = htmlspecialchars($_POST['name']);
//   }
//   if (isset($_POST['firstName'])) {
//     $firstName = htmlspecialchars($_POST['firstName']);
//   }
//   if (isset($_POST['email'])) {
//     $email = htmlspecialchars($_POST['email']);
//   }
//   if (isset($_POST['gender'])) {
//     $gender = htmlspecialchars($_POST['gender']);
//   }
//   if (isset($_POST['country'])) {
//     $country = $_POST['country'];
//   }
//   if (isset($_POST['subject'])) {
//     $subject = $_POST['subject'];
//   }
//   if (isset($_POST['mesage'])) {
//     $message = htmlspecialchars($_POST['message']);
//   }
// };


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" type="image/png" href="assets/img/hackers-poulette-logo.png" />
  <title>Confirmation</title>
</head>

<body>
  <?php
  include("header.html");
  ?>

  <main>
    <div class="jumbotron jumbotron-fluid">
      <img src="assets/img//hackers-poulette-logo.png">
      <div class="container">
        <h2 class="display-4">Thank you for your trust!</h2>
        <p class="lead"><?php echo 'Hello ' . htmlspecialchars($_POST['name'] . '!') ?> <p> Your message has been send. Our team wil do they best to respond you as soon as possible.
      </div>
      <br /><br />
  </main>
  <hr />

  <?php
  include("footer.html");
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>