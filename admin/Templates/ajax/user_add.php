<?php

require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



    use Edu\Board\Controller\User;

    $user = new User;

    $data = $user -> createUser($_POST);

    echo $data;















 ?>
