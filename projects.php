<!DOCTYPE html>
<html lang = "en">
   
   <head>
	    
	    <?php
	     require("static/includes.html");
	    ?>
	      
   </head>
   
   <body>
 

    <?php
	    require("static/navBar.html");
	  ?>

	  <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-sm-6">
		    	<h2>Multiplayer Tank Arena</h2>
		    	
		    	<p>I made a 2D multiplayer browser game. Players control a tank to shoot and move within an arena.</p>

				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		HTML/CSS.
			      	</li>
		    	 	<li>
			      		Javascript/jQuery.
			      	</li>
		    	 	<li>
			      		<a href= "https://nodejs.org/en/">Node.js</a>.
			      	</li>
		    	 	<li>
			      		<a href= "https://socket.io/">Socket.io</a>.
			      	</li>
			      	<li>
			      		<a href= "https://phaser.io/">Phaser</a>.
			      	</li>
			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Multiplayer gameplay.
			      	</li>
			      	<li>
			      		Built-in online chat.
			      	</li>
			      </ul>
			     	
		    </div>
			<div class="col-sm-6">
				 	<video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="videos/tankArenaTrim.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="https://multiplayertankarena.herokuapp.com/" role="button" download>Play online</a>
						<a class="btn btn-success" href="https://github.com/apearc03/nodeProject" role="button">Github</a>
					</div>
		     	 </div>
		     	 <div class="row">
		     	 	<div class="mx-auto">
		     	 		<p>(Heroku apps take a few seconds to start up if idle)</p>
		     	 	</div>
		     	</div>
		    </div>
		  </div>
		</div>
		


		 <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-sm-6">
		    	<h2>Conway's game of life</h2> 
			      <p>I re-created <a href = "https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">Conway's game of life</a>.</p>
		    		<p>The program uses an algorithm which only tests active cell state rather than the entire board. This, along with selective rendering leads to high performance.</p>
				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		Java.
			      	</li>
			      	<li>
			      		<a href= "https://libgdx.badlogicgames.com/">LibGDX</a>.
			      	</li>
			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Cell size customization. Test different cell width and height combinations.
			      	</li>
			      	<li>
			      		Controls for starting, stopping and resetting the game board.
			      	</li>
			      	<li>
			      		Pattern automater. Select patterns to be added to the board.
			      	</li>
			      	<li>
			      		Living cell counter.
			      	</li>
			      </ul>
		    </div>
		    <div class="col-sm-6">
		      <video class="embed-responsive vid" width="400" height="400" muted autoplay loop>
					  <source src="videos/conwayV2.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		      		<div class="mx-auto">
			      		<a class="btn btn-primary" href="downloads/GameOfLifeV2.jar" role="button" download>Download Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/GameOfLife" role="button">Github</a>
					</div>
		      </div>
		    </div>
		  </div>
		</div>

	  <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-sm-6">
		    	<h2>Pong</h2>
		    	
		    	<p>My implementation of the classic arcade game, <a href = "https://en.wikipedia.org/wiki/Pong">Pong</a>.</p>
		    	<p>This is a trimmed version of my <a href = "https://github.com/apearc03/pongProject-w-DB-connectivity" alt = "bscProj">BSc project</a>.</p>
				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		Java.
			      	</li>
			      	<li>
			      		<a href= "https://libgdx.badlogicgames.com/">LibGDX</a>.
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
			<div class="col-sm-6">
				 	<video class="embed-responsive vid" width="400" height="300" muted autoplay loop>
					  <source src="videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="downloads/PongLIBGDX.jar" role="button" download>Download Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/pongDesktop" role="button">Github</a>
					</div>
		     	 </div>
		    </div>
		  </div>
		</div>



		 <div class="container-fluid project">
		  <div class="row projectSegment">
		    <div class="col-sm-6">
		    	<h2>alexpearce.info</h2> 
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
			      		<a href= "https://getbootstrap.com/">Bootstrap</a>.
			      	</li>

			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Responsive design.
			      	</li>
			      </ul>
		    </div>
		    <div class="col-sm-6">
		    		<img src = "images/aboutPic.png"  class="img-fluid vid" width="700" height="400" alt="aboutPic">
		     	
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