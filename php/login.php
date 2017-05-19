<?php

require "define.php";

$login=$PDO->prepare("SELECT * FROM users WHERE pseudo=:pseudo AND password=:password");
$login->bindValue(":pseudo", $_POST["pseudo"]);
$login->bindValue(":password", sha1($_POST["password"]));
$login->execute();
$compte=$login->fetch();

if($compte==""){
  echo false;
}else{
  session_start();
  $_SESSION['id'] = $compte->id;
  $_SESSION['pseudo'] = $compte->pseudo;
  echo true;
}

?>
