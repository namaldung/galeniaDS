<!DOCTYPE html>
  <html>
    <head>
      <link rel="shortcut icon" href="logo.png" />
      <title>Galenia</title>
    </head>
    <body>
      <!-- cek apakah punya cache -->

      <!-- kalo gak ada, redirect buat login -->
      <?php header('Location: login.html'); ?>

      <!-- kalo ada, redirect ke home -->
      <?php //header('Location: home.php'); ?>
    </body>
  </html>
