<?php
    namespace Edu\Board\Support;


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
      return $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=" . $this -> db ,$this -> user, $this -> pass);
    }

    // Data check
    public function dataCheck($tbl, array $data, $condition = 'AND')
  {
    $query_string= '';
    foreach( $data as $key => $val ){

      $query_string .=  $key . "='$val' $condition ";


    }

    $query_array = explode(' ', $query_string);
    array_pop($query_array);
    array_pop($query_array);

    $final_query_string =  implode(' ', $query_array);

    $stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE $final_query_string");
    $stmt -> execute();
    $num = $stmt -> rowCount();

    return [
      'num'	=> $num,
      'data'	=> $stmt,
    ];



  }

  //Data create
  public function create()
  {
    // code...
  }
  //Data find
  public function find()
  {
    // code...
  }
  //Data delete  
  public function delete()
  {
    // code...
  }

    //Data update
    public function update($tbl, $id, array $data)
		{
			$query_string = '';
			foreach($data as $key => $val){

				$query_string .= "$key = '$val' , ";

			}

			$query_array = explode(' ', $query_string);
			array_pop($query_array);
			array_pop($query_array);

		 $final_query_string =  implode(' ', $query_array);

			$stmt = $this -> connection() -> prepare("UPDATE $tbl SET $final_query_string WHERE id='$id' ");
			$stmt -> execute();

		}

  }




 ?>
