<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     require("../templates/header.html");
	    ?>
	      
   </head>
   
   <body>




	 <script>
   	 	$(document).ready(function() {
			$("#about").css({"background-color": "#00ccff", "border-radius": "10px"});
			$("#welcome").animate({'opacity':1},1500);
	 	});
	 </script>




   	 <?php
	    require("../templates/navBar.html");
	  ?>


   

   


	  

 <div class="container-fluid">
  <div class="row">
    <div class="col-6" id ="intro">
      <h1 id ="welcome">Hi, I'm Alex.</h1>
	      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="col-6">
      <img src = "../images/pic.png" class="img-fluid" alt="AP" id = "me">
    </div>
  </div>
</div>




	
	<?php
	    require("../templates/footerBar.html");
	  ?>

      

   </body>
</html>