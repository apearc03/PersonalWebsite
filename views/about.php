<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     include("../templates/header.html");
	    ?>
	      
   </head>
   
   <body>




	 <script>
   	 	$(document).ready(function() {
			$("#about").css({"background-color": "#00ccff", "border-radius": "10px"});
			$("#welcome").css({'opacity':0}).animate({'opacity':1},1000);
	 	});
	 </script>




   	 <?php
	    include("../templates/navBar.html");
	  ?>


   

   


	  

 <div class="container-fluid">
  <div class="row">
    <div class="col-6" id ="intro">
      <h1 id ="welcome">Hi, I'm Alex. Welcome to my website.</h1> 
	      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="col-6">
      <img src = "../images/pic.png" class="img-fluid" alt="AP" id = "me">
    </div>
  </div>
</div>




	<div class="container-fluid fixed-bottom navbar-dark">
			<div class="row">
			    <div class="col-12" id ="bottom">
			      <img src = "../images/pic.png" class="img-fluid" alt="AP" height="42" width="42">
			      <img src = "../images/pic.png" class="img-fluid" alt="AP" height="42" width="42">
			      <img src = "../images/pic.png" class="img-fluid" alt="AP" height="42" width="42">
			    </div>	  
			  </div>
	</div>

      

   </body>
</html>