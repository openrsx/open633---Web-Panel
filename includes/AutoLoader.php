<?php
spl_autoload_register('myAutoLoader');

  function myAutoLoader($className) {
      $path = $_SERVER['DOCUMENT_ROOT'] . '/633_web_panel/classes/';
      $extension = ".class.php";
      $fullPath = $path . $className . $extension;

      if (!file_exists($fullPath)) {
        return false;
      }

      include_once $fullPath;
  }
?>
