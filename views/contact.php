<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     require("../static/includes.html");
	    ?>
	      
   </head>
   
   <body>




	 <script>
   	 	$(document).ready(function() {
			navBarInit("#contact");
	 	});
	 </script>




   	 <?php
	    require("../static/navBar.html");
	  ?>

	   <div class="container-fluid" id = "contactForm">

			<h1 id = "contactMe">Contact me</h1>
			  <form class="form-horizontal" role="form" method="post" action="contactResult">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="" value="" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email"  value="" required>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							 <div class="row">
					         	<div class="mx-auto">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
					     	 </div>
							
						</div>
					</div>
			</form>
	</div> 
	   








	  


	
	<?php
	    require("../static/footerBar.html");
	  ?>

      

   </body>
</html>