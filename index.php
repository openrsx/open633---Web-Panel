<?php
      include 'includes/style.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>open633 - Web panel</title>
  </head>
  <body>
    <?php
        include 'nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid">
     <video autoplay muted loop oncontextmenu="return false;" src="./resources/video.mp4" type="video/mp4"></video>
     <div class="jumbo-container">
       <h1>Hello, <?php echo $user->username ?>!</h1>
       <?php if ($user->id == $configuration->isDev($user->id)): ?>
         <p class="sm-margin">Welcome to the official open633 Web Panel (Dashboard).<br>As a Developer you have full access to all the contents that the open633 Dashboard has to offer.</p>
       <?php else : ?>
         <p class="sm-margin">Welcome to the official open633 Web Panel (Dashboard).<br>Here you may be able to read the latest <a href="notes.php">Staff Notes</a>, view misc information related to the Website or Server, etc...</p>
       <?php endif ?>
     </div>
   </div>

   <div class="toast-container position-fixed bottom-0 end-0 p-3">
     <div id="welcomeToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
       <div class="toast-header bg-primary text-light">
         <h5 class="my-0">Welcome, <?php echo $user->username ?></h5> <img class="avatar" src="<?php echo $avatar ?>" title="<?php echo $user->username ?>"></img>
       </div>
       <div class="toast-body">
           <p>You have signed in successfully, if you have any questions, suggestions, etc.. please report them to the <a href="https://discord.gg/zuqCZhHQaG">Discord Server</a>.</p>
       </div>
     </div>
   </div>

    <footer>
      <?php
        include 'footer.php';
      ?>
    </footer>
  </body>
</html>
