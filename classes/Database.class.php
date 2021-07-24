<?php

/**
 * Initializes a Database connection
 * to the webhost specified below.
 */
class Database {

  /**
   * Sets the Web Host Address.
   * @var $hostAddress
   */
  private $hostAddress = "localhost";

  /**
   * Sets the Database Username.
   * @var $username
   */
  private $username = "root";

  /**
   * Sets the Databases Password.
   * @var $password
   */
  private $password = "";

  /**
   * Sets the Database Name.
   * @var $databaseName
   */
  private $databaseName = "open633-staff-panel";

  /**
   * Creates a secure connection via PDO
   * to the Database, sets specific parameters.
   * @return connect()
   */
  protected function connect() {
      $dsn = 'mysql:host=' . $this->hostAddress . ';dbname=' . $this->databaseName;
      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
      return $pdo;
  }
}
?>
