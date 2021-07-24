<?php
$avatar = "https://cdn.discordapp.com/avatars/" . $user->id . "/" . $user->avatar . ".png";
$configuration->redirectIP();
if ($_SESSION == null) {
   header('location: http://localhost/633_web_panel/login.php');
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
    <form class="d-flex form-inline my-2 my-lg-0">
        <img class="avatar" src="<?php echo $avatar ?>" title="<?php echo $user->username ?>"></img>
        <a href="http://localhost/633_web_panel/logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
      </form>
  </div>
</div>
</nav>
