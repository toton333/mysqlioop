$(document).ready(function(){

   $('#submit').click(function(){
   
     var message = $('#message').val();
	
	 
    $.ajax({
	
	url:'post.php',
	type:'post',
	data:{message:message},
	success: function(data){
	
	  $('#message').val("");
	}
	
	});
	
	
   
   });

});

//updating chat window, copied from chat1, but it is not working here
		  function loadLog(){
		  
		   var oldscrollHeight = $('#middle').attr("scrollHeight") - 20;
		  
		  
		  $.ajax({
		  
		        url: "show.php",
				cache: false,
				success: function(data){
				   $('#middle').html(data);
				   var newscrollHeight = $("#middle").attr("scrollHeight") - 20;
		  
		           if(newscrollHeight > oldscrollHeight){
		  
		            $("#middle").animate({scrollTop:newscrollHeight}, 'normal');
		            }
				}
		  
		  }); 
	  
		  }
		  
		  setInterval(loadLog, 2500);







