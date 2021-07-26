<?php
  include '../includes/style.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>open633 - Logs</title>
  </head>
  <body>
    <?php
        include '../nav.php';
    ?>
    <div class="container">
      <div class="alert alert-dark text-center" role="alert">
        This UI is being worked on right now.
      </div>
      <?php
        echo $configuration->getLog();
      ?>
    </div>
    <footer>
      <?php
        include '../footer.php';
      ?>
    </footer>
  </body>
</html>
