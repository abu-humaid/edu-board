<?php
  namespace Edu\Board\Controller;
  use Edu\Board\Support\Database;

  /**
   * User managements
   */
  class User extends Database
  {
    // User create system
    public function createUser($data)
    {
      $data = $this -> create('users', [
          'name' => $data['name'],
          'uname' => $data['uname'],
          'pass' => password_hash('login', PASSWORD_DEFAULT),
          'email' => $data['email'],
          'cell' => $data['cell'],
          'role' => $data['role']
      ]);

      if ($data) {
        return "<p class=\"alert alert-success\">User added successfuly ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
      }


    }



    // Password change system
    public function passwordChange($user_id, $new_pass )
    {

      $this -> Update('users', $user_id, [

            'pass' => password_hash($new_pass, PASSWORD_DEFAULT)

        ] );

        return "<p class=\"alert alert-success\">Password changed successfuly ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }

    // Create all users
    public function allUser()
    {
      $data = $this -> all('users');
      return $data;
    }

    // Delete user
    public function userDelete($id)
    {
      $data = $this -> delete( 'users', $id);

      if ($data) {
        return true;
      }

    }





  }


 ?>
