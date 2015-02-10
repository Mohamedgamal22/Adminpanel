<?php

  require "config/database.php";
  require "db.php";
  $db= new db($config);
  $con = $db->conect();
  if (!$con) die(" not conect db !");