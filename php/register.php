<?php

require "define.php";

if($_POST["nom"]!="" && $_POST["prenom"]!="" && $_POST["pseudo"]!="" && $_POST["password"]!=""){
  $verif=$PDO->prepare("SELECT pseudo FROM users WHERE pseudo=:pseudo");
  $verif->bindValue(":pseudo", $_POST["pseudo"]);
  $verif->execute();
  $test=$verif->fetch();

  if($test!=""){
    echo "1";
  }
  elseif($_POST["password"]!=$_POST["confirm-password"]) {
    echo "3";
  }
  else{
    $req=$PDO->prepare("INSERT INTO users (pseudo, email, password) VALUES (:pseudo, :email, :password)");
    $req->bindValue(":pseudo", $_POST["pseudo"]);
    $req->bindValue(":email", $_POST["email"]);
    $req->bindValue(":password", sha1($_POST["password"]));

    if($req->execute()){
      $login=$PDO->prepare("SELECT * FROM users WHERE pseudo=:pseudo AND password=:password");
      $login->bindValue(":pseudo", $_POST["pseudo"]);
      $login->bindValue(":password", sha1($_POST["password"]));
      $login->execute();
      $compte=$login->fetch();
      session_start();
      $_SESSION['id'] = $compte->id;
      $_SESSION['pseudo'] = $compte->pseudo;
      echo "0";
    }
    else{
      echo "4";
    }
  }
}
else{
  echo "2";
}

?>
