<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projetonba');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Você precisa digitar um usuário!"); }
  if (empty($email)) { array_push($errors, "Você precisa digitar um email!"); }
  if (empty($password_1)) { array_push($errors, "Você precisa digitar uma senha!"); }
  if ($password_1 != $password_2) {
  array_push($errors, "As senhas precisam ser iguais");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usuarios WHERE login='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['login'] === $username) {
      array_push($errors, "Esse usuário já está sendo utilizado!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Esse email já está sendo utilizado");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO usuarios (login, email, senha) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['login'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}

if (isset($_POST['login_user'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) 
  {
    array_push($errors, "Você precisa digitar um usuário!");
  }
  if (empty($password))
  {
    array_push($errors, "Você precisa digitar uma senha!");
  }

  if (count($errors) == 0) 
  {
    $password = md5($password);
    $query = "SELECT * FROM usuarios WHERE login='$username' AND senha='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['username'] = $username;
      header('location: telainicial.php');
      exit();
    }
    else 
    {
      array_push($errors, "Usuário e/ou senha incorretos!");
    }
  }
}


 

?>