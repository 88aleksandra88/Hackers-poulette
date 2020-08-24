<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>Hacker-poulette</title>
  </head>
  <body>
    <h1>Form contact</h1>
    <form action="/action_form.php" target="_blank" method="post">
      <div class="form-group">
        <label for="fullName">Your name and last name</label>
        <input type="text" class="form-control"  aria-describedby="name"  placeholder="ex: Jean Dupond">
      </div>
      <div class="form-group">
        <label for="gender">Your gender</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Male</option>
          <option>Femele</option>
        </select>
      </div>
      <div class="form-group">
        <label for="mail">Email address</label>
        <input type="email" class="form-control" placeholder="name@example.com">
      </div>
     <div class="form-group">
        <label for="country">Your country</label>
        <input type="name" class="form-control"  aria-describedby="name"  placeholder="ex: Jean Dupond">
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
       </select>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control"rows="3"></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>