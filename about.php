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

	  <?php
	    require("static/sideBar.html");
	  ?>



<!-- ABOUT -->

<div class = "container-fluid pageBreak" id = "start">
	  <div class="row">
	    <div class="col-sm-6" id ="intro">
	    <div id = "aboutMid"></div>
	      <h1 id ="welcome">Hi, I'm Alex.</h1>
	      <br>
		  <p>I'm a software developer from the UK.</p>
		  <p>I created this website as a portfolio to showcase some of my experiences and projects.</p>
		  <p>Download a copy of my C.V. <a href = "downloads/AlexPearceCV.pdf" alt = "CV" download>here</a>.</p>
	    </div>
		<div class="col-sm-1">
	  	</div>
		 <div class="col-sm-5">
	      <img src = "images/pic.png" class="img-fluid" alt="AP" height = "400" width = "300" id = "me">
	    </div>
	  </div>
</div>

<!-- WORK HISTORY -->

	<div class = "container-fluid pageBreak" id ="jobs">
	   	<div class = "row">
	   		<div class = "col-sm-10">
	   				<h1>Paxport</h1>
	   				<p><Strong>Mid level Software Developer</Strong>  - October 2019 - Present</p>
	   				<p><Strong>Junior Software Developer</Strong>  - August 2018 - October 2019</p>
	   				<p>I'm currently working as a Mid level Software Developer at Paxport. Paxport provides a range of software products used in the travel industry. My role is to maintain and develop ‘Find and Book’. Find and Book is the aggregation service that organises many different services from flight, accommodation and ancillary suppliers into one single source. These suppliers include big travel industry entities such as Easyjet, Ryanair and British Airways.</p>
	   				<p>My time here has involved:</p>
	   				<ul class="list-group">
					      	<li>Java 8 development.</li>
					      	<li>The use of Java tools and frameworks such as Maven, Gradle, Spring Boot, Lombok, Dagger 2, Feign, JAXB, Jackson, Mockito, WireMock and JUnit.<li>
					      	<li>An agile style development methodology. Sprint based work.</li>	
					      	<li>Regular development against third party web APIs of many types. JSON, REST, XML, SOAP etc.</li>
					      	<li>Performing code reviews.</li>
					      	<li>Version control systems including Git, Gitlab, SVN.</li>
					      	<li>Working with continuous deployment systems. Specifically working with Gitlab CI and Jenkins.</li>
					      	<li>Gradual migration from a monolithic software architecture to microservices.</li>
					      	<li>Daily use of Jira as a ticketing and issue system.</li>
					      	<li>Working directly with Postgres databases to help troubleshoot and resolve bugs.</li>
					      	<li>Experience with various Google Cloud platform products.</li>
					      		<ul>
					      			<li>Docker containers were built from images and deployed to Google Cloud’s Kubernetes engine.</li>
					      			<li>Production and test environments hosted on Google Compute Engine.</li>
					      			<li>Development against a Firestore database.</li>
					      			<li>Worked with Google Storage, IAM and Service accounts.</li>
					      		</ul>
			     	</ul>
	   			</div>
				 <div class = "col-sm-2">
			   			<img src = "images/paxport.jpg" alt = "pax" width="200" height ="50">
			   	</div>
	   		</div>
	   		<br>
	   		<!-- PWC -->
	   		<div id = "jobsMid"></div>
		   	<div class = "row">
				<div class = "col-sm-10">
					<h1>PwC</h1>
						<p><Strong>Data Assurance Intern</Strong> - July 2017 -September 2017</p>
				   		<p>During summer 2017, I was selected to join the PwC Bristol office for a 6 week internship within their Data Assurance services. This was a fantastic experience as I was able to work in a very interesting field with some great individuals.</p>
				   		<p>I had a lot of exposure to technologies such as:</p>
				   		 <ul class="list-group">
					      		<li>Qlik Sense/View</li>
					      		<li>Power BI</li>
					      		<li>R programming language</li>
			     		 </ul>
			     		<br>
			     		<p>The main project I was tasked with involved developing a dashboard within Qlik Sense to display utilisation of the Data Assurance team's hours. This meant creating a visually effective display of statistics and key performance indicators.</p>	
				 </div>
				 <div class = "col-sm-2">
			   			<img src = "images/pwc.JPG" alt = "pwc" width="200" height ="150">
			   	</div>
			</div>
					
		</div>

  <!--QUALIFICATIONS -->
	
	  <div class="container-fluid pageBreak" id = "bsc">
		  			<div class = "col-lg">
		  				<h1>BSc Computing</h1>
					    <p> I graduated from <a href = "http://www.bbk.ac.uk/" alt = "bbk">Birkbeck, University of London</a> with first class honours. </p>
					    <p> I really enjoyed the course at Birkbeck, the content was interesting and also challenging. The lecturers provided a great learning experience throughout the 4 years of study. I have definitely come away from the degree with a lot of useful knowledge and practical experience.
						 <p> 
					    <p>	
					    Below, I have listed every module I studied whilst at Birkbeck.
						 <p>   
					 </div>
		    <div class = "row rowAdjustment">
		    	<div id = "bscMid"></div>
				<div class="col-sm years">
					<p><strong>Year 1</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		Systems Analysis and Design 1
				      	</li>	
			    	 	<li class = "module">
				      		Introduction to Computer Systems
				      	</li>
				      	<li class = "module">
				      		Introduction to Programming
				      	</li>
				      	<li class = "module">
				      		Introduction to Web Authoring
				      	</li>
				      	<li class = "module">
				      		Mathematics for Computing
				      	</li>
				      	<li class = "module">
				      		Problem-Solving for Programming
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
				<p><strong>Year 2</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		Computer Networking
				      	</li>	
			    	 	<li class = "module">
				      		Data Structures and Algorithms
				      	</li>
				      	<li class = "module">
				      		E-business
				      	</li>
				      	<li class = "module">
				      		Systems Analysis and Design II
				      	</li>
				      	<li class = "module">
				      		Web Programming using PHP
				      	</li>
				      	<li class = "module">
				      		Software and Programming 1
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
					<p><strong>Year 3</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		Computer Organisation and Systems Software
				      	</li>	
			    	 	<li class = "module">
				      		Database Management
				      	</li>
				      	<li class = "module">
				      		Information Security
				      	</li>
				      	<li class = "module">
				      		Organizational Behaviour
				      	</li>
				      	<li class = "module">
				      		Practical Software Engineering
				      	</li>
				      	<li class = "module">
				      		Software and Programming 2
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
						<p><strong>Year 4</strong></p>
					<ul class="list-group ">
						<li class = "module">
				      		BSc Computing Project
				      	</li>	
			    	 	<li class = "module">
				      		JavaScript
				      	</li>
				      	<li class = "module">
				      		Professional Issues in Computing
				      	</li>
				      	<li class = "module">
				      		Practical Software Engineering
				      	</li>
				      	<li class = "module">
				      		Software and Programming 3
				      	</li>
			      </ul>
			    </div>
			</div>
			<div class = "col-lg" id = "bscProject">
					    <p>For my BSc computing project I built my own version of Pong in Java. The application included multiple screens, Android compatibility, database connectivity for high scores and a balanced AI player.</p>
					    <p> View the code on GitHub <a href = "https://github.com/apearc03/pongProject-w-DB-connectivity" alt = "pongProject">here</a>.</p>
			</div>
		</div>
	  
  <!-- PROJECTS -->

  	  

  <div class = "container-fluid pageBreak" id ="proj">
	 
  		<div class="row">
		 <div class="col-sm-3 darkProj">
		 	<h5>Spring Boot Instagram Scraper</h5>	  	
		    	<p>I created a Spring Boot web service that scrapes Instagram user pages and returns public data in a JSON format.</p>
				<p><strong>Built with:</strong></p>
		    	 <ul class="list-group">
		    	 	<li>
			      		Java 8.
			      	</li>
		    	 	<li>
			      		Spring Boot.
			      	</li>
		    	 	<li>
			      		Dagger 2.
			      	</li>
		    	 	<li>
			      		Jackson.
			      	</li>
			      </ul>
			     <p class = "features"><strong>Features:</strong></p>
			     <ul class="list-group">
		    	 	<li>
			      		Incorporates controllers for both POST and GET methods.
			      	</li>
			      	<li>
			      		Returns data for multiple users from a single request.
			      	</li>
			      	<li>
			      		Swagger UI documentation.
			      	</li>
			      </ul>	     	
		    </div>
			<div class="col-sm-3 darkProj">
				 	<img src = "images/gramScraper.PNG"  class="img-fluid vid" width="700" height="400" alt="aboutPic">
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="https://gramscraper.herokuapp.com/" role="button" download>Test it out!</a>
						<a class="btn btn-success" href="https://github.com/apearc03/InstagramScraperService" role="button">Github</a>
					</div>
		     	 </div>
		     	 <div class="row">
		     	 	<div class="mx-auto">
		     	 		<p>(Heroku apps take a few seconds to start up if idle)</p>
		     	 	</div>
		     	</div>
		  </div>  	 
		<div class="col-sm-3 lightProj">
		    	<h4>Conway's game of life</h4> 
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
			      </ul>
		    </div>
		    <div class="col-sm-3 lightProj">
		      <video class="embed-responsive vid" width="300" height="300" muted autoplay loop>
					  <source src="videos/conwayV2.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		      		<div class="mx-auto">
			      		<a class="btn btn-primary" href="downloads/GameOfLifeV2.jar" role="button" download>Download Runnable Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/GameOfLife" role="button">Github</a>
					</div>
		      </div>
		    </div>
	</div>

	<div id = "projMid"></div>
		  <!-- Bottom row of projects -->

		  <div class="row">
		    <div class="col-sm-3 lightProj">
		    	<h4>Pong</h4>
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
			<div class="col-sm-3 lightProj">
				 	<video class="embed-responsive vid" width="300" height="300" muted autoplay loop>
					  <source src="videos/pongLoop.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
		         <div class="row">
		         	<div class="mx-auto">
			      		<a class="btn btn-primary" href="downloads/PongLIBGDX.jar" role="button" download>Download Runnable Jar</a>
						<a class="btn btn-success" href="https://github.com/apearc03/pongDesktop" role="button">Github</a>
					</div>
		     	 </div>
		    </div>
		     <div class="col-sm-3 darkProj">
		    	<h4>Multiplayer Tank Arena</h4>	    	
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
			<div class="col-sm-3 darkProj">
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



		<!-- CONTACT FORM-->

		<div class="container-fluid pageBreak"  id = "contactForm"> 

			<h1 class="col-sm-10" id = "contactMe">Contact me</h1>
			<br>
			  <form  onsubmit="return validateMyForm();" id = "formID" class="form-horizontal" role="form" method="post" action="contactResult">
					<div class="form-group">
						<label for="name" class="col-sm-10 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-10 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="" value="" required>
						</div>
					</div>
					<div id = "contactFormMid"></div>
					<div class="form-group">
						<label for="email" class="col-sm-10 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email"  value="" required>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-10 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message" id="message" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							 <div class="row">
					         	<div class="mx-auto">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
					     	 </div>
					     	 <br>
							<div class="col-sm-12" id = "submitError"></div>
						</div>
					</div>
			</form>
	</div> 

   </body>
</html>