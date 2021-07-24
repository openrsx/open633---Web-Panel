<?php

/**
 * Selects or Inserts to/from Database using a MVC sytem.
 */
class Configuration extends Database {

    /**
     * If the user's IP connecting is trying to access this web panel and
     * isn't listed here, then send them elsewhere.
     */
    public function redirectIP() {
      $deny = array('');
      if (in_array ($_SERVER['REMOTE_ADDR'], $deny, true)) {
        header("location: https://google.com");
        die();
      }
    }

    /**
    * Checks if the unique Discord ID is equal to Developers Rights (admin)
    * (Conditionally if so, then unlock features)
    */
    function isDev($id) {
      $staffArray = array('512256244233535493');
      return in_array ($id, $staffArray) ? true : false;
    }
}
?>
