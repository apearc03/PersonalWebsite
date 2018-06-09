<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     require("../templates/includes.html");
	    ?>
	      
   </head>
   
   <body>
   	 <script>
   	 	$(document).ready(function() {
   	 		navBarInit("#projects");
	 	});
	 </script>

    <?php
	    require("../templates/navBar.html");
	  ?>


		

	  <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-6">
		    	<h2>Pong</h2>
		    	
		    	<p>My implementation of the classic arcade game, <a href = "https://en.wikipedia.org/wiki/Pong">Pong</a>.</p>
		    	
				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		Java.
			      	</li>
			      	<li>
			      		<a href= "https://libgdx.badlogicgames.com/">LibGDX</a> Java game development framework.
			      	</li>
			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Settings for volume, controls, resolution and difficulty.
			      	</li>
			      	<li>
			      		Music, sounds and artwork.
			      	</li>
			      </ul>
			     	
		    </div>
			<div class="col-6">
				 	<video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="../videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="../apps/PongLIBGDX.jar" role="button" download>Download Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/pongDesktop" role="button">Github</a>
					</div>
		     	 </div>
		    </div>
		  </div>
		</div>


		 <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-6">
		    	<h2>Conway's game of life</h2> 
			      <p>I re-created <a href = "https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">Conway's game of life<a>.</p>
		    	
				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		Java.
			      	</li>
			      	<li>
			      		<a href= "https://libgdx.badlogicgames.com/">LibGDX</a> Java game development framework.
			      	</li>
			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Cell and board size customization.
			      	</li>
			      	<li>
			      		Controls for starting, stopping and resetting the game board.
			      	</li>
			      </ul>
		    </div>
		    <div class="col-6">
		      <video class="embed-responsive vid" width="400" height="400" muted autoplay loop>
					  <source src="../videos/conwayLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		      		<div class="mx-auto">
			      		<a class="btn btn-primary" href="../apps/GameOfLife.jar" role="button" download>Download Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/GameOfLife" role="button">Github</a>
					</div>
		      </div>
		    </div>
		  </div>
		</div>

		 <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-6">
		    	<h2>alexpearce.me</h2> 
			      <p>A personal website to showcase information about myself. </p>
			      	<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		HTML/CSS.
			      	</li>
			      	<li>
			      		Javascript.
			      	</li>
		    	 	<li>
			      		PHP.
			      	</li>
			      	<li>
			      		<a href= "https://getbootstrap.com/">Bootstrap</a>. A front end library for building responsive websites. 
			      	</li>

			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Responsive design.
			      	</li>
			      	<li>
			      		Mobile friendly. TO BE CONFIRMED
			      	</li>
			      </ul>
		    </div>
		    <div class="col-6">
		      <video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="../videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		   		    <div class="row">
		      		<div class="mx-auto">
						<a class="btn btn-success" href="https://github.com/apearc03/PersonalWebsite" role="button">Github</a>
					</div>
		      </div>
		    </div>
		  </div>
		</div>
	  

      

   </body>
</html>