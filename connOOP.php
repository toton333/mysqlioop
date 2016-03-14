<?php

$db = new mysqli("localhost","root","ladygaga123","test");

if($db->connect_errno){

  die("Could not connect, try again later.");

}
?>