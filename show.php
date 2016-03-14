<?php
require 'connOOP.php';

$query = "SELECT * FROM chat";

if($result = $db->query($query)){

  if($result->num_rows){
  
     while($row = $result->fetch_object()){
	 
	   echo "($row->time) <b>$row->sender :</b> <i> $row->message</i><br/><br/>";
	 }
	 $result->free();
  }
}

?>