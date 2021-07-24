<?php

/**
 * Using a MVC system we retrieve protected methods
 * and returns their value, ready for execution.
 */
class DatabaseConfiguration extends Configuration {

  public function escapeSpecialChars($param) {
    return htmlspecialchars($param, ENT_QUOTES, 'UTF-8');
  }
}
?>
