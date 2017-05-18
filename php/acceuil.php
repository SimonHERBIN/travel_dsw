<?php

define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASSWD", "Cw83ulkdUcuiJVwQ");
define("MYSQL_DB", "dsw_travel");

try {
  $PDO = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB,MYSQL_USER,MYSQL_PASSWD);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (PDOException $e) {
  $e->getMessage();
}

session_start();
$news = $PDO -> prepare("SELECT * FROM actus");
$news -> execute();
$afficher = $news -> fetchAll();

$i = 0;
foreach($afficher as $value){
  if($i<3){
    if($value->private==1 && !isset($_SESSION["id"])){
    }
    else{
      $i++;
      echo '<div class="col-sm-4 col-md-4">
              <div class="thumbnail">
                <img src="' . $value->image . '" alt="' . $value->imgalt . '">
                <div class="caption">
                  <h3>' . $value->title . '</h3>
                  <p>' . $value->textpreview . '</p>
                  <p><a href="#" class="btn btn-primary" role="button">Lire la suite</a></p>
                </div>
              </div>
            </div>';
    }
  }
}

?>
