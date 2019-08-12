<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];
        $secretKey = "6LfEZrIUAAAAAENsFIgdpcNzSFLgyjc1VnNAdrJ3";
        $responseKey = $_POST['g-recaptcha-response'];
        $userIP = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = json_decode($response);
        if ($response->success)
            echo "Verification success. Your name is: $username";
        else
            echo "Verification failed!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phoenix Robotics LLC is an artificial intelligence and robotics firm located within the Phoenix">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Phoenix Robotics | Contact</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: #000 !important;">
        <a class="navbar-brand ml-3" href="index.html"><img src="img/logo.png" style="max-height: 60px;" alt="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto mr-5">
            <a class="nav-item nav-link" href="about.html"><p class=" lead m-0">About</p></a>
            <a class="nav-item nav-link" href="services.html"><p class="lead m-0">Services</p></a>
            <a class="nav-item nav-link" href="rd.html"><p class="lead m-0">R&D</p></a>
            <a class="nav-item nav-link active" href="contact.html"><p class="font-weight-bold lead m-0">Contact</p><span class="sr-only">(current)</span></a>
          </div>
        </div>
    </nav>

    <header></header>

    <!-- MAIN CONTENT -->

    <main id="main" class="mt-5">
        <div class="row">
            <div id="about-box" class="col-md-10 mx-auto p-4 contact-box">
                <div id="form-btn"><span class="lead font-weight-bold">GO TO FORM</span><img src="img/mail.png" alt=""></div>
                <h1 id="contact-title" class="display-4 mt-4">Contact Us</h1>
                <p class="lead my-4">Interested? This website is still under construction and many details are forthcoming. However, if you have found us early and would like more details, please give us a call at (480) 401-7377. </p>
                <p class="font-weight-bold lead mt-4 mb-1">Mailing Address</p>
                <p class="lead my-0">Phoenix Robotics LLC</p>
                <p class="lead my-0">10632 N Scottsdale Rd #428</p>
                <p class="lead my-0">Scottsdale, AZ 85254-6107</p>
            </div>
        </div>
    </main>

    <div class="row">
      <div class="col-md-10 mx-auto p-4 form-box">
          <div id="contact-btn"><img src="img/back.ico" alt=""></div>
          <form method="POST" action="contact.php" id="mainForm" class="form-group">
              <input type="text" class="form-control my-2 d-block py-4" id="name" placeholder="Enter Your Name">
              <input type="email" class="form-control my-2 d-block py-4" id="email" placeholder="Enter Your Email Address">
              <input type="number" id="telephone" class="form-control my-2 d-block py-4" placeholder="Enter Your Mobile Number">
              <textarea id="message" class="form-control my-2 d-block py-4" placeholder="Enter Your Message"></textarea>
              <input type="submit" value="SUBMIT" class="btn btn-block btn-primary my-2 btn-lg">
              <div class="g-recaptcha" data-sitekey="6LfEZrIUAAAAAENsFIgdpcNzSFLgyjc1VnNAdrJ3"></div>
          </form>
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="form-animation.js"></script>
  </body>
</html>