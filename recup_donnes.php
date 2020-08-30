<?php
/*$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=hacker-poulette', $user, $pass);
   /* foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}*/



if(isset($_POST['honeypot']) && $_POST['honeypot'] != "")
die();
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'aleksoujones@gmail.c';
  
// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'
  
// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
  
// Messages d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord <a href=\"index.php\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
  



if (isset($_POST['submit'])) {
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
};


/*var_dump($_POST);
(isset($_POST['name']) || (isset($_POST['firstName']) || (isset($_POST['email']) || (isset($_POST['gender']) || (isset($_POST['country']) || (isset($_POST['subject']) || (isset($_POST['message']))))))));{
  // declaration variable*/
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" type="image/png" href="assets/img/hackers-poulette-logo.png" />

  <title>Confirmation</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand">Hackers-poulette</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Shop</a>
      </li>
    </ul>
  </div>
</nav>

  <main>
    <div class="jumbotron jumbotron-fluid">
      <img src="assets/img//hackers-poulette-logo.png">
      <div class="container">
        <h2 class="display-4">Thank you for your trust!</h2>
        <p class="lead"><?php echo 'Hello ' . htmlspecialchars($_POST['name'] . '!') ?> <p>Our team wil do they best to respond you as soon as possible.
      </div>
      <br /><br />
  </main>
  <hr />

  <footer class="container footer footer-expand-md navbar-dark" id="footer">
    <div class="row">
      <div class="col-12 col-md">
        <img src="assets/img/hackers-poulette-logo.png" width="100" height="100" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
        <title>Product</title></img>
        <small class="d-block mb-4 text-muted">&copy; 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Business</a></li>
          <li><a class="text-muted" href="#">Education</a></li>
          <li><a class="text-muted" href="#">Government</a></li>
          <li><a class="text-muted" href="#">Gaming</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>