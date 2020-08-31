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
  <title>Hackers-poulette</title>
</head>

<body>
  <!--Header-------------------------------------------------------------------------------->
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
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Shop</a>
      </li>
    </ul>
  </div>
</nav>

  <!--Jumbo------------------------------------------------------------------------------------------>
  <div class="jumbotron jumbotron-fluid">
    <img src="assets/img//hackers-poulette-logo.png" width="250" height="250">

    <h1 class="display-4">How can we help?</h1>
    <p class="lead">Need to get in touch witch the team? We're all ears.</p>
  </div>
  </div>
  <!---FORM----------------------------->
  <div>
<label for="honeypot"></label>
<input type="text" class="form-control" id="honeypot" placeholder="U can see me?" name="honeypot">
</div>


  <form action="recup_donnes.php" method="POST" aria-label="Contact form">

    <div class="form-group" text-center">
      <label for="uname">Last name:</label><span style="color: red !important; display: inline; float: none;">*</span>
      <input type="text" class="form-control" id="uname" placeholder="Enter your name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
<!--Honeypot---------------------------------------------->



    <div class="form-group" text-center">
      <label for="firstname">First name: :</label><span style="color: red ; display: inline; float: none;">*</span>
      <input type="text" class="form-control" id="firstname" placeholder="Enter your firstname" name="firstname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect2">Gender:</label><span style="color: red; display: inline; float: none;">*</span>
      <input type="text" class="form-control" id="gender" name="gender" required>
    </div>

    <!-- Email -->
    <div class="form-group">
      <label for="email">Email:</label><span style="color: red; display: inline; float: none;">*</span>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" aria-describedby="emailHelp" aria-required="true" required />
      </div>
      <span class="error" role="alert" aria-relevant="all"></span>
    </div>

    <!-- Country -->

    <div class="form-group">
      <label for="exampleFormControlSelect2">Country:</label><span style="color: red; display: inline; float: none;" required>*</span>
      <?php 
             include("countrys.php");
      ?>

    </div>

    <!-- Subject -->
    <div class="form-group">
      <label for="subject">Subject:</label>
      <select class="form-control" name="subject" id="subject">
        <option value="other">Other</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>

    <!-- Message -->
    <div class="form-group">
      <label for="message">Message:</label><span style="color: red; display: inline; float: none;">*</span>
      <span class="error" role="alert" aria-relevant="all" required> </span>
      <textarea class="form-control" rows="3" name="message" required></textarea>
    </div>

    <!-- Buttons -->
    <button type="submit" class="btn btn-info" role="button" name="submit">Submit</button>
  </form>
  </div>
  </div>
  </form><br /><br />
  <hr />

  <footer class="container footer footer-expand-md navbar-dark" id="footer">
    <div class="row">
      <div class="col-12 col-md">
        <img src="assets/img/hackers-poulette-logo.png" width="150" height="150" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
        <title>Product</title></img>
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