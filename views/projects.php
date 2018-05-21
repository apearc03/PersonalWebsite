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
	 		$("#projects").css({"background-color": "#00ccff", "border-radius": "10px"});
	 	});
	 </script>

    <?php
	    require("../templates/navBar.html");
	  ?>


	 <!-- replace images with gif animations of projects -->
		

	 <div class="container-fluid col-12 project">
	 		      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	 </div>

	  <div class="container-fluid project">
		  <div class="row">
		    <div class="col-6">
		    	<h2>Pong</h2> 
			      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		    </div>
			<div class="col-6">
				 	<video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="../videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="#" role="button">Download Jar</a>
						<a class="btn btn-success" href="#" role="button">Github</a>
					</div>
		     	 </div>
		    </div>
		  </div>
		</div>


		 <div class="container-fluid project">
		  <div class="row">
		    <div class="col-6">
		    	<h2>Conway's game of life</h2> 
			      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		    </div>
		    <div class="col-6">
		      <video class="embed-responsive vid" width="400" height="400" muted autoplay loop>
					  <source src="../videos/conwayLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		      		<div class="mx-auto">
			      		<a class="btn btn-primary" href="#" role="button">Download Jar</a>
						<a class="btn btn-success" href="#" role="button">Github</a>
					</div>
		      </div>
		    </div>
		  </div>
		</div>

		 <div class="container-fluid project">
		  <div class="row">
		    <div class="col-6">
		    	<h2>alexpearce.me</h2> 
			      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		    </div>
		    <div class="col-6">
		      <video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="../videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		   		    <div class="row">
		      		<div class="mx-auto">
						<a class="btn btn-success" href="#" role="button">Github</a>
					</div>
		      </div>
		    </div>
		  </div>
		</div>
	  

      

   </body>
</html>