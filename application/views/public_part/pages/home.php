<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

					?>
<?php include "slider.php";?>

				<!-- Upcoming Event Start -->
<?php include "upcoming_events.php";?>              
                <!-- Upcoming Event End -->

					<!-- Message from members -->
<?php include "message_from_members.php";?> 
			  		<!-- Message from members End -->



					<!-- Qac -->
<?php include "qac.php";?> 					
<?php include "iqac.php";?> 	
		        
			
<!-- objectives -->
<?php include "objectives.php";?> 

	              

		        <div id="iqac" class="star-devider">
				          <img src="<?php echo base_url(); ?>assets/frontend/img/black-star.png" alt="">
		        </div>


<!-- functions -->
<?php include "functions.php";?>    

      	<!-- Activity -->
<?php include "home_activity.php";?>    
		    
    	<!-- Achievments -->
<?php include "home_achievments.php";?>  	        

		 <!-- Achievement End -->

<?php include "downloads.php";?> 
		            <!-- Material and download -->
		           

		        <!--Gallery start -->
<?php include "home_gallery.php";?>      	        
		        <!-- gallery end -->


		  


		        <!-- testimonial start -->
<?php include "testimonial.php";?> 
		        <!-- testimonial end -->