<?php
 $email=$_POST["email"];
 $password=$_POST["password"];
  if(!empty($email)){
    if(!empty($password)){
      $host="localhost";
      $dbemail="root";
      $dbpassword="";
      $dbname="signin";

      $conn = new mysqli($host,$dbemail,$dbpassword,$dbname);
    }
    else{
        echo "password empty"
    }
  }
  else{
    echo "username empty";
    die();
  }
?>
