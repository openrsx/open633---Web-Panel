<?php
$avatar = "https://cdn.discordapp.com/avatars/" . $user->id . "/" . $user->avatar . ".png";
$configuration->redirectIP();
if ($_SESSION == null) {
   header('location: http://localhost/633_web_panel/login.php');
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href=""> <img src="http://localhost/633_web_panel/resources/logo.png" class="logo">open633 - Web Panel</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logs</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button>
      </form>
    </div>
  </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h3>Currently signed in as:</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-center">
    <div class="container">
      <img class="avatar" src="<?php echo $avatar ?>" title="<?php echo $user->username ?>"></img>
      <p><?php echo $user->username?></p>
      <p>Discord ID: <?php echo $user->id ?></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p><a href="http://localhost/633_web_panel/logout.php" class="btn btn-outline-danger my-2 my-sm-0 position-absolute bottom-10 start-30 translate-middle">Logout</a></p>
      <ul class="position-absolute bottom-0 start-50 translate-middle-x">
        <li> <a href="https://github.com/openrsx/">open633 - GitHub</a></li>
        <li> <a href="https://discord.gg/zuqCZhHQaG">Discord Server</a></li>
      </ul>
    </div>
  </div>
</div>
