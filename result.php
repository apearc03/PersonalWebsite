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
			navBarInit("#contact");
	 	});
	 </script>




   	 <?php
	    require("static/navBar.html");
	  ?>

	   <div class="container-fluid" id = "result">

	   		
	

					<?php 

						if(isset($result)){
						echo "<h1>$result</h1>";
					}

					?>
					<a href = "https://alexpearce.info/" alt = "index">Back to the home page.</a>
						

		</div> 
	   








	  


	
	<?php
	    require("static/footerBar.html");
	  ?>

      

   </body>
</html>