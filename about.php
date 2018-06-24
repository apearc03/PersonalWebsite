<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     require("static/includes.html");
	    ?>
	      
   </head>
   
   <body>




	 <script>
   	 	$(document).ready(function() {
			navBarInit("#about");
			$("#welcome").animate({'opacity':1},1500);

	 	});
	 </script>




   	 <?php
	    require("static/navBar.html");
	  ?>


   

   


	  

 <div class="container-fluid">
  <div class="row">
    <div class="col-sm-6" id ="intro">
      <h1 id ="welcome">Hi, I'm Alex.</h1>
	  <p>I'm a Computing graduate from the UK. A few of my interests include emerging technologies, programming and powerlifting.</p>
	  <p>I created this website as a portfolio to showcase some of my experiences and projects.</p>
	  <p>Feel free to <a href = "contact" alt = "">contact</a> me with any suggestions or feedback you may have.</p>
    </div>
	<div class="col-sm-1">
  	</div>
	 <div class="col-sm-5">
      <img src = "images/pic.png" class="img-fluid" alt="AP"  height = "300" width = "300" id = "me">
    </div>
  </div>
</div>




	
	<?php
	    require("static/footerBar.html");
	  ?>

      

   </body>
</html>