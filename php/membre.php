<?php

require define.php;

session_start();
if($_SESSION["id"]==""){
  echo false;
}
else{
  echo true;
}

?>
