<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Docker | wyveo/nginx-php-fpm</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/skeleton.min.css">

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
        <img height="45px" src="data:image/png;base64,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">
        <h4>Congratulations!</h4>
        <p>You have successfully deployed a <strong>docker</strong> container running our <strong>NGINX</strong> with <strong>PHP-FPM 7.x</strong> image</p>
        <p><strong>NGINX: </strong>v<?php echo $_ENV['NGINX_VERSION'] ?><br><strong>PHP-FPM: </strong>v<?php echo phpversion(); ?><br><strong>HOSTNAME: </strong><?php echo gethostname(); ?><br><strong>WEB ROOT: </strong><?php echo $_ENV['DOCUMENT_ROOT'] ?></p>
          <em>Thank you for using <a style="text-decoration:none" href="https://wyveo.com" target="_blank">wyveo.com</a></em>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
