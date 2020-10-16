<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" type="image/png" href="assets/img/hackers-poulette-logo.png" />
  <script src="https://unpkg.com/scrollreveal@4"></script>
  <script>
    ScrollReveal({
      duration: 1000
    })
  </script>
  <title>Hackers-poulette</title>
</head>

<body>
  <?php
  include("header.html");
  ?>

  <!--Jumbo-------------------------------->

  <div class="jumbotron jumbotron-fluid">
    <img class="headline" src="assets/img//hackers-poulette-logo.png" width="250" height="250">

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

    <div class="form-group">
      <label for="exampleFormControlSelect2">Country:</label><span style="color: red; display: inline; float: none;" required>*</span>
      <?php
      include("countrys.php");
      ?>
    </div>

    <div class="form-group">
      <label for="subject">Subject:</label>
      <select class="form-control" name="subject" id="subject">
        <option value="other">Other</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>

    <div class="form-group">
      <label for="message">Message:</label><span style="color: red; display: inline; float: none;">*</span>
      <span class="error" role="alert" aria-relevant="all" required> </span>
      <textarea class="form-control" rows="3" name="message" required></textarea>
    </div>

    <button type="submit" class="btn btn-info" role="button" name="submit">Submit</button>
  </form>
  </div>
  </div>
  </form><br /><br />
  <hr />
  <?php
  include("footer.html");
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
    ScrollReveal().reveal('.headline', {
      delay: 300
    })
    ScrollReveal().reveal('.display-4', {
      delay: 500
    })
    ScrollReveal().reveal('.lead', {
      delay: 1000
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>