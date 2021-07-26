<?php

/**
 * Using a MVC system we retrieve protected methods
 * and returns their value, ready for execution.
 */
class DatabaseConfiguration extends Configuration {

  /**
  * Info can be found here: https://www.javatpoint.com/php-string-htmlspecialchars-function
  */
  public function escapeSpecialChars($param) {
    return htmlspecialchars($param, ENT_QUOTES, 'UTF-8');
  }

  /**
  * Gets & Returns all the data from the Logs method
  */
  public function getLog() {
    return $this->getAllLogs();
  }
}
?>
