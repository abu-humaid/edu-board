<?php
    requre_once "../../config.php";
    namespace Edu/Board/Support;
    use PDO;
  /**
   * Teacher managements
   */

  abstract class Database
  {

    //Surver information
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $db = DB;
    private $connection;

    // Database connection

    private function connection()
    {
      $this -> connection = new PDO("mysql:host=". $this -> host .";db_name=" . $this -> db ,$this -> user, $this -> pass);
    }


  }




 ?>
