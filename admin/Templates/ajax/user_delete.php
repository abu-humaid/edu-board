<?php

require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



    use Edu\Board\Controller\User;

    $user = new User;

    $id = $_POST['id'];

    $data = $user -> userDelete($id);

    if ($data) {
      echo "<p class=\"alert alert-success\">User delete successfuly ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }













 ?>
