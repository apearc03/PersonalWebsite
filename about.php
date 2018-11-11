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

<div class = "container-fluid pageBreak" id = "start">
	  <div class="row">
	    <div class="col-sm-6" id ="intro">
	      <h1 id ="welcome">Hi, I'm Alex.</h1>
		  <p>I'm a Computer Science graduate from the UK. A few of my interests include emerging technologies, programming and powerlifting.</p>
		  <p>I created this website as a portfolio to showcase some of my experiences and projects.</p>
		  <p>Feel free to <a onclick="scrollToDiv('#contactForm','#contact');" alt = "">contact</a> me with any suggestions or feedback you may have.</p>
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
	   		<div class = "col-sm-6">
	   				<h1 >Paxport</h1>
	   				<p><Strong>Junior Software Developer</Strong>  - August 2018 - Present</p>
					<!-- TO DO
						<p>Download my C.V. <a href = "" alt = "CV">here</a>.</p>-->
	   			</div>
	   			<div class = "col-sm-2">
			   	</div>
				 <div class = "col-sm-4">
			   			<img src = "images/paxport.jpg" alt = "pax" width="200" height ="50">
			   	</div>
	   		</div>



		   	<div class = "row ">
				<div class = "col-sm-8">
					<h1 >PwC</h1>
						<p><Strong>Data Assurance Intern</Strong> - July 2017 -September 2017</p>
				   		<p>During summer 2017, I was selected to join the <a href = "https://www.pwc.co.uk/careers/offices/bristol.html" alt = "pwcBristol">PwC Bristol</a> office for a 6 week internship within their <a href = "https://www.pwc.co.uk/services/audit-assurance/risk-assurance/services/data-analytics-assurance.html" alt = "Data">Data Assurance</a> services. This was a fantastic experience as I was able to work in a very interesting field with some great individuals.</p>
				   		<p>I had a lot of exposure to technologies such as:</p>

				   		 <ul class="list-group">
					      		<a href = "https://www.qlik.com/us/products/qlik-sense" alt ="qlikSense">Qlik Sense</a>
					      		<a href = "https://www.qlik.com/us/products/qlikview" alt ="qlikView">Qlik View</a>
					      		<a href = "https://powerbi.microsoft.com/en-us/" alt ="powerBi">Power BI</a>
					      		<a href = "https://www.r-project.org/about.html" alt ="R">R programming language</a>
					      		<a href = "https://en.wikipedia.org/wiki/Microsoft_SQL_Server" alt ="SQLServer">Microsoft SQL Server</a>				      
					      		<a href = "https://www.youtube.com/watch?time_continue=1&v=KuuAXzp7zqY" alt ="bbk">Aura Audit Software</a>
					      	
			     		 </ul>

			     		<br>
			     		<p>The main project I was tasked with involved developing a dashboard within Qlik Sense to display utilisation of the Data Assurance team's hours. This meant creating a visually effective display of statistics and key performance indicators.</p>
			     		<p>This data was based upon the team's chargeable/non chargeable hours, type of clients and the services they were providing. The resulting dashboard made trends clear such as which team members were meeting chargeable hour targets and how the team's resources were being spent.</p>

			     		<p>During the internship I also had the opportunity to travel and work with clients. I joined the controls assurance team to carry out IT controls testing for <a href = "https://www.omega-pharma.com/en" alt = "omega">Omega Pharma</a>, a sub division of <a href = "https://www.perrigouk.co.uk/default.aspx" alt = "Perri">Perrigo</a>. This project involved regular communication with clients, meeting deadlines and working heavily with Aura Audit Software to assess the companies control protocols.</p>
			     		
				 </div>
				 <div class = "col-sm-4">
			   			<img src = "images/pwc.JPG" alt = "pwc" width="200" height ="150">
			   	</div>
			</div>
					
		</div>

  <!--QUALIFICATIONS -->
	
	  <div class="container-fluid pageBreak" id = "bsc">
		  			<div class = "col-lg">
		  				<h1>BSc Computing</h1>
					    <p> I recently graduated from <a href = "http://www.bbk.ac.uk/" alt = "bbk">Birkbeck, University of London</a> with first class honours. </p>
					    <p> I really enjoyed the course at Birkbeck, the content was very interesting and also challenging. The lecturers provided a great learning experience throughout the 4 years of study. I have definitely come away from the degree with a lot of useful knowledge and practical experience.
						 <p> 
					    <p>	
					    Below I have listed every module I studied whilst at Birkbeck. Each list item is a link to the official Birkbeck module page which contains a brief introduction along with content and objectives.
						 <p>   
					 </div>
		    <div class = "row rowAdjustment">
				<div class="col-sm years">
					<p><strong>Year 1</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/systems-analysis-and-design-i/" alt ="bbk">Systems Analysis and Design 1</a>
				      	</li>	
			    	 	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/introduction-to-computer-systems/" alt ="bbk">Introduction to Computer Systems</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/introduction-to-programming/" alt ="bbk">Introduction to Programming</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/introduction-to-web-authoring/" alt ="bbk">Introduction to Web Authoring</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/mathematics-for-computing/" alt ="bbk">Mathematics for Computing</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/problem-solving-for-programming/" alt ="bbk">Problem-Solving for Programming</a>
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
				<p><strong>Year 2</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/computer-networking/" alt ="bbk">Computer Networking</a>
				      	</li>	
			    	 	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/data-structures-and-algorithms/" alt ="bbk">Data Structures and Algorithms</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/e-business/" alt ="bbk">E-business</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/systems-analysis-and-design-ii/" alt ="bbk">Systems Analysis and Design II</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/web-programming-using-php/" alt ="bbk">Web Programming using PHP</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/software-and-programming-i/" alt ="bbk">Software and Programming 1</a>
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
					<p><strong>Year 3</strong></p>
					<ul class="list-group">
						<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/computer-organisation-and-systems-software-1/" alt ="bbk">Computer Organisation and Systems Software</a>
				      	</li>	
			    	 	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/database-management/" alt ="bbk">Database Management</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/information-security/" alt ="bbk">Information Security</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/organizational-behaviour/" alt ="bbk">Organizational Behaviour</a>
				      	</li>
				      	<li class = "module">
				      		Practical Software Engineering
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/software-and-programming-ii/" alt ="bbk">Software and Programming 2</a>
				      	</li>
			      </ul>
			    </div>
			    <div class="col-sm years">
						<p><strong>Year 4</strong></p>
					<ul class="list-group ">
						<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/project-computing/" alt ="bbk">BSc Computing Project</a>
				      	</li>	
			    	 	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/javascript/" alt ="bbk">JavaScript</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/professional-issues-in-computing/" alt ="bbk">Professional Issues in Computing</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/practical-software-engineering/" alt ="bbk">Practical Software Engineering</a>
				      	</li>
				      	<li class = "module">
				      		<a href = "https://www.dcs.bbk.ac.uk/study/modules/software-and-programming-iii/" alt ="bbk">Software and Programming 3</a>
				      	</li>
			      </ul>
			    </div>
			</div>
			<div class = "col-lg" id = "bscProject">
					    <p>For my BSc computing project I built my own version of Pong in Java. The application included multiple screens, Android compatibility, database connectivity for high scores and a balanced AI player.</p>
					    <p> View the code on GitHub <a href = "https://github.com/apearc03/pongProject-w-DB-connectivity" alt = "pongProject">here</a>.</p>
					    <p> Download the final written report in PDF <a href = "downloads/Final Year Project-AlexPearce.pdf" alt = "writtenReport" download>here</a>.</p>
			</div>
		</div>
	  
  <!-- PROJECTS -->

  	  

  <div class = "container-fluid pageBreak" id ="proj">
	 
  		<div class="row">
		    <div class="col-sm-3">
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
			<div class="col-sm-3">
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
		   <div class="col-sm-3">
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
		    <div class="col-sm-3">
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


		  <!-- Bottom row of projects -->

		  <div class="row">
		    <div class="col-sm-3">
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
			<div class="col-sm-3">
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
		     <div class="col-sm-3">
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
		    <div class="col-sm-3">
		    		<img src = "images/aboutPic.png"  class="img-fluid vid" width="700" height="400" alt="aboutPic">
		     	
		   		    <div class="row">
			      		<div class="mx-auto">
							<a class="btn btn-success" href="https://github.com/apearc03/PersonalWebsite" role="button">Github</a>
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