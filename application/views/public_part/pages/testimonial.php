 <section class="testimonial-section section-padding">
			        <div class="container">
		              	<div class="row text-center">
		                	<div class="col-xs-12">
		                  		<h2 class="section-title wow zoomIn">Our Resource person Say About Us</h2>
		                	</div>
		              	</div> <!-- /.row -->
       
		              	<div class="row content-row">
		      					   
		                	<div class="col-xs-12">
		                			
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->

								  
								  <ol class="carousel-indicators">
								  	 <?php $i=0;$c='active'; foreach($home_resource_person as $v){ ?>
								    <li data-target="#testimonial-carousel" data-slide-to="<?php echo $i++; ?>" class="<?php echo $c;  ?>"></li>
								   	<?php $c = ""; } ?>
								  </ol>

								  <!-- Wrapper for slides -->
 
								  	 
								  <div class="carousel-inner" role="listbox">
 <?php  $item_class="active"; foreach($home_resource_person as $v){ ?>
								    <div class="item <?php echo $item_class; ?>">
								      <!-- <img src="<?php echo base_url(); ?>assets/frontend/img/avatar-2.jpg" alt=""> -->
								      <div class="carousel-caption">
								        <p><?php echo $v->quote; ?></p>

								        <span class="source-title"><?php echo $v->name." , ".$v->company?></span>
								      </div>
								    </div>
							
	
								        <?php $item_class = ""; } ?>
								  </div>
					
									
								</div>
									
		                	</div>

		              	</div> <!-- /.row -->

		            </div> <!-- /.container -->
		        </section>
		        <?php /*

	 <section class="testimonial-section section-padding">
			        <div class="container">
		              	<div class="row text-center">
		                	<div class="col-xs-12">
		                  		<h2 class="section-title wow zoomIn">Our Resource person Say About Us</h2>
		                	</div>
		              	</div> <!-- /.row -->

		              	<div class="row content-row">
		                	<div class="col-xs-12">
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								    <div class="item active">
								      <!-- <img src="<?php echo base_url(); ?>assets/frontend/img/avatar-2.jpg" alt=""> -->
								      <div class="carousel-caption">
								        <p>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</p>

								        <span class="source-title">Chanel Iman, Pinterest</span>
								      </div>
								    </div>
								    <div class="item">
								      <!-- <img src="<?php echo base_url(); ?>assets/frontend/img/avatar-2.jpg" alt=""> -->
								      <div class="carousel-caption">
								        <p>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</p>

								        <span class="source-title">Chanel Iman, Pinterest</span>
								      </div>
								    </div>
								    <div class="item">
								      <!-- <img src="<?php echo base_url(); ?>assets/frontend/img/avatar-2.jpg" alt=""> -->
								      <div class="carousel-caption">
								        <p>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</p>

								        <span class="source-title">Chanel Iman, Pinterest</span>
								      </div>
								    </div>

								  </div>

								</div>
		                	</div>
		              	</div> <!-- /.row -->
		            </div> <!-- /.container -->
		        </section>

		        */?>