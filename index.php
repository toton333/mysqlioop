<?php
require 'connOOP.php';
?>

<!DOCTYPE html>
<html lang="en">

	<head>
	  <title>Database Chat</title>
      <link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>
	
	<body>
	<?php
	 session_start();
	 
	 function loginForm(){
	 
	 echo '<div id="loginForm">
	 <form action="index.php" method="post" />
	  <b>Name:&nbsp  </b><input type="text" name="name" />
	  <input type="submit" name="enter" value="Submit" />
	 </form>
	 </div>';
	 
	 }
	 
	 if(isset($_GET['logout'])){
	   
	    session_destroy();
		header('Location:index.php');
	 }
	 
	 
	 
	 if(isset($_POST['enter'])){
	 
	  if(!empty($_POST['name'])){
	  
	    $_SESSION['name'] = $_POST['name'];
	  }else{
	   echo '<p class="error">Please insert a name</p>';
	  
	  }
	 }
	 
	 
	 if(!isset($_SESSION['name'])){
	 
	   loginForm();
	   
	 }else{
	?>
	
	
	<div id="container">
       <div id="wrapper">
	   
	       <div id="top">
		   <p class="welcome">welcome, <b><?php echo $_SESSION['name']; ?></b></p>
		   <p class="logout"><a href="index.php?logout=true">Exit</a><p>
		   <div style="clear:both"></div>
		   </div>
		   
		   <div id="middle"></div>
		  
		   <div id="bottom">
		    
			 <input type="text" id="message"  size="60"/>
			 <input type="submit" id="submit" value="Send" />
			
		   </div> 
		   
	   </div><!--end of wrapper-->
	</div><!--end of container-->
	<?php 
	 }
	?>
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script type="text/javascript" src="js/chat.js">
	   
	   </script>
	</body>


</html>