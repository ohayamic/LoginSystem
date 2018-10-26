<?php 
	include_once 'header.php';
 ?>
		</div><!-- close the header for the background image -->
		<section>
			<div class="main-div">	
			
				<?php 
					if (isset($_SESSION['u_id'])) {
						echo '<div class="space">
						<div class="main-div">
  								<div class="main-div">      									 
										<a href="#"><img id="image0" src="Cats.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image1" src="Cats.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image2" src="Cats.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image3" src="Cats.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image4" src="Cats.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image5" src="Cats.jpg" onClick="togglePlay()"></a>
      							</div>
							  </div>		
							<div class="main-div">
								  <div class="main-div">
								  		<a href="#"><img id="image6" src="dogs.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image7" src="dogs.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image8" src="dogs.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image9" src="dogs.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image10" src="dogs.jpg" onClick="togglePlay()"></a>
										<a href="#"><img id="image11" src="dogs.jpg" onClick="togglePlay()"></a>
																																																		
    							</div>
							</div>
						   </div>';		
      					}else{
						echo '
			<div class="home-div1">
				<h2> Welcome to the future</h2>
					<div class="media">
  						<img class="mr-3" src="Cats.png" alt="Generic placeholder image">
  							<div class="media-body">
    							<h3 class="mt-0">Cats</h2>
									Cras sit amet nibh libero, in gravida nulla. Nulla 
									vel metus scelerisque ante sollicitudin. Cras purus
									 odio, vestibulum in vulputate at, tempus viverra turpis. 
									 Fusce condimentum nunc ac nisi vulputate fringilla. 
									 Donec lacinia congue felis in faucibus.

    						<div class="media mt-3">
      							<a class="pr-3" href="#">
        						<img src="dogs.jpg" alt="Generic placeholder image">
      							</a>
      								<div class="media-body">
        								<h3 class="mt-0">Dogs</h3>
											Cras sit amet nibh libero, in gravida nulla. 
											Nulla vel metus scelerisque ante sollicitudin. 
											Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											Fusce condimentum nunc ac nisi vulputate fringilla. 
											Donec lacinia congue felis in faucibus.
      								</div>
    						</div>
  					</div>
				</div>
			</div>
						
						';
					}
				 ?>
			</div>	
		</section>
<?php 
	include_once 'footer.php';
 ?>				
									
								
      									
									
									
      									
									
									
      									
    								
  								
									
      									
									
									
      									
									
									
      									
    								
  								 
							 
							  
					
	
