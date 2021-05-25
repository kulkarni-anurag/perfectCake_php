<?php
  session_start();
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $mysqli = new mysqli('localhost:3306', 'root', '', 'perfectcake');
  
  if($mysqli->connect_error){
    die('Connection Error'.$conn->connect_error);
  }
  
  $query = "SELECT * FROM members WHERE email = '$email'";
  $result = mysqli_query($mysqli, $query) or die($mysqli->error);
  $num_row = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  
  if($num_row >= 1){
    if(password_verify($password, $row['password'])){
      $_SESSION['login'] = $row['id'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      echo('true');
    }
    else {
      echo('false');
    }
  }
  else{
    echo('false');
  }
  
?>
