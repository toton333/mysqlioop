<?php
session_start();

include 'connOOP.php';

if(isset($_POST['message'])){

  $message = $_POST['message'];
  $sender = $_SESSION['name'];
  $time = date('g:i A');
  
  $query = "INSERT INTO chat(sender, message, time) VALUES(?,?,?)";
  if($statement = $db->prepare($query)){
  
    $statement->bind_param('sss', $sender, $message, $time);
	
	if($statement->execute()){
	    //we can't use order by , limit when deleting multiple rows
		//the below code will work but my version of mysql doesn't support it
		 $query2 = "delete from chat where id not in(select id from chat order by id desc limit 14)";
		 $db->query($query2);
		 
		  
	
	}else{
	
	  echo "Some error occured";
	}
  
  }else{
  
    echo "Some error occured";
  }
  
 
  
}


?>