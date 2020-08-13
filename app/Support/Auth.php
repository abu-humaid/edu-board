<?php
  namespace Edu\Board\Support;
  use Edu\Board\Support\Database;
  use PDO;
  /**
   * Auth menagements
   */
  class Auth extends Database
  {
    // Login management system
    public function userLoginSystem($email_uname, $pass )
    {
      $data = $this -> emailUsernameCheck($email_uname);

      $num = $data['num'];
      $login_user_data = $data['data'] -> fetch(PDO::FETCH_ASSOC);

      if ($num == 1) {
        if ( password_verify($pass, $login_user_data['pass'] ) ) {

          $_SESSION['id'] = $login_user_data['id'];
          $_SESSION['name'] = $login_user_data['name'];
          $_SESSION['uname'] = $login_user_data['uname'];
          $_SESSION['email'] = $login_user_data['email'];
          $_SESSION['cell'] = $login_user_data['cell'];
          $_SESSION['pass'] = $login_user_data['pass'];
          $_SESSION['role'] = $login_user_data['role'];
          $_SESSION['photo'] = $login_user_data['photo'];

          header('location:dashboard.php');


        } else {
          return "<p class=\"alert alert-warning\">Wrong password ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }

      }else {
        return "<p class=\"alert alert-danger\">Your username or email is incorrect ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
      }
    }

    // Email/Username check

    public function emailUsernameCheck($email_uname)
    {
      return $this -> dataCheck('users', $email_uname );



    }

  }













?>
