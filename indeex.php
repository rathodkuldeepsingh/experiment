<?php
  /* Defining a PHP Function */
  function writeMessage()
  {
  echo "You are really a nice person, Have a nice time!";
  }
  /* Calling a PHP Function */
  if(isset($_GET['writeMessage'])){
   writeMessage();
   }
?>
