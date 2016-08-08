<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Buy This Domain - Make An Offer $$</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <?php

        // Form DATA
        $domain = $_POST["domain"];
        $name   = $_POST["name"];
        $email  = $_POST["email"];
        $phone  = $_POST["phone"];
        $price  = $_POST["price"];

        // Database Connection Info
        $servername = "localhost";
        $username = "domain_buyer";
        $password = "domain_buyer";
        $dbname = "domain_offers";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO offers (domain, name, email, phone, price)
        VALUES ('$domain', '$name', '$email', '$phone', '$price')";
        ?>

        <?php if ($conn->query($sql) === TRUE): ?>
          <h4>Thank you!</h4>
          <p>Your offer has been submitted. I will be in touch. Cheers! 🍻</p>
        <?php else: ?>
          <h4>Oops!</h4>
          <p>There was an error submitting your offer. Go back, check that your information is valid and then resubmit.</p>"
        <?php endif; ?>

        <?php $conn->close(); ?>

        
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
