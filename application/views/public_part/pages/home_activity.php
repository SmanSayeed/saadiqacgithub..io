    


				 <!-- Blog Homepage-->
		        <section id="activities" class="team-section blog-section section-padding">

			        <div class="container">
		              	<div class="row text-center">
		                	<div class="col-xs-12">
		                  		<h2 class="section-title wow zoomIn">ACTIVITIES</h2>
		                	</div>
		              	</div> <!-- /.row -->

		              	     
 

		              	<div class="row content-row">
  <?php foreach ($home_activity as $v) {?>
		         


							<div class="col-sm-6 col-md-4">
	

				
								<article class="blog-post-wrapper">

																	<header class="entry-header">
										<div class="entry-meta">

										<?php 
											$date=$v->date;
											$date = date('F, Y', strtotime($date))


										?>

											<span class="the-time"><a href="#"><?php echo $date; ?><sup>th</sup></a></span>


										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url().$v->image1; ?> " alt="">


										<div class="entry-footer clearfix">
								            
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal<?php echo $v->id; ?>"><?php echo $v->title; ?></h2>
										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
				

		        	<!-- Activity Model -->


		        	<div class="modal fade galleryModal" id="activityModal<?php echo $v->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url().$v->image1; ?>" alt="">
						        		<img class="img-responsive" src="<?php echo base_url().$v->image2; ?>" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3><?php echo $v->title; ?></h3>
						        			<?php echo $v->description; ?>
						        			<blockquote>
											  <p><?php echo $v->quote; ?></p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->


						</div><!-- /.galleryoModal -->
 <?php } ?>

					

						<!-- activitymodel2 -->

</div>
 	</div><!-- /.row -->
 	
	<div class="more-work-button text-center">
				        	<a href="Gallery.html" class="btn btn-primary btn-lg">More Works</a>
				        </div>

		        	</div> <!-- /.container -->

		        	

		        </section>
		        <!-- activity end -->

    <?php /*
    <section id="activities" class="team-section blog-section section-padding">
			        <div class="container">
		              	<div class="row text-center">
		                	<div class="col-xs-12">
		                  		<h2 class="section-title wow zoomIn">ACTIVITIES</h2>
		                	</div>
		              	</div> <!-- /.row -->


		              	<div class="row content-row">
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">Apr 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-1.jpg" class="img-responsive " alt="">


										<div class="entry-footer clearfix">
								            <!-- <ul class="list-inline pull-left">
								                <li><span class="the-comments" > <a href="#"><i class="fa fa-comment"></i> 11</a></span></li>
								                <li><span class="the-like" > <a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
								         	</ul> -->

								       		<!-- <a class="readmore pull-right" href="#galleryModal1"><i class="fa fa-plus"></i></a> -->
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal1">Workshop/training on Development of Outcome Based Curriculum</h2>
										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">May 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-2.jpg" class="img-responsive " alt="">

										<div class="entry-footer clearfix">
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal2">Workshop/training on Teaching-Learning and Assessment (Tertiary Pedagogy).</h2>
										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">Jun 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-3.jpg" class="img-responsive " alt="">

										<div class="entry-footer clearfix">
								            <!-- <ul class="list-inline pull-left">
								                <li><span class="the-comments" > <a href="#"><i class="fa fa-comment"></i> 11</a></span></li>
								                <li><span class="the-like" > <a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
								         	</ul>

								       		<a class="readmore pull-right" href="blog-single.html"><i class="fa fa-plus"></i></a> -->
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal3">Workshop/training on Workshop on Data Management and Report Writing and EPR 					Facing </a></h2>
										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">Aug 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-4.jpg" class="img-responsive " alt="">

										<div class="entry-footer clearfix">
								            <!-- <ul class="list-inline pull-left">
								                <li><span class="the-comments" > <a href="#"><i class="fa fa-comment"></i> 11</a></span></li>
								                <li><span class="the-like" > <a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
								         	</ul>

								       		<a class="readmore pull-right" href="blog-single.html"><i class="fa fa-plus"></i></a> -->
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal4">Workshop/training on IT Innovation and Entrepreneurship Development</a></h2>

										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">Jan 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-5.jpg" class="img-responsive " alt="">

										<div class="entry-footer clearfix">
								            <!-- <ul class="list-inline pull-left">
								                <li><span class="the-comments" > <a href="#"><i class="fa fa-comment"></i> 11</a></span></li>
								                <li><span class="the-like" > <a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
								         	</ul>

								       		<a class="readmore pull-right" href="blog-single.html"><i class="fa fa-plus"></i></a> -->
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal5">Workshop/training on Outsourcing / Freelancing in CoU</a></h2>

										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<article class="blog-post-wrapper">
									<header class="entry-header">
										<div class="entry-meta">
											<span class="the-time"><a href="#">Feb 23<sup>th</sup></a></span>
										</div><!-- /.entry-meta -->

										
									</header><!-- /.entry-header -->

									<div class="post-thumbnail">
										<img src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-6.jpg" class="img-responsive " alt="">

										<div class="entry-footer clearfix">
								            <!-- <ul class="list-inline pull-left">
								                <li><span class="the-comments" > <a href="#"><i class="fa fa-comment"></i> 11</a></span></li>
								                <li><span class="the-like" > <a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
								         	</ul>

								       		<a class="readmore pull-right" href="blog-single.html"><i class="fa fa-plus"></i></a> -->
								       		<h2 class="entry-title"><a href="" data-toggle="modal" data-target="#activityModal6">Workshop/training on Business Research Methods: How to write a research proposal</a></h2>
										</div><!-- /.entry-footer -->
									</div><!-- /.post-thumbnail -->
								</article>
					      	</div><!-- /.col-md-4 -->
		              	</div><!-- /.row -->

						<div class="more-work-button text-center">
				        	<a href="<?php echo base_url()?>more-activity" class="btn btn-primary btn-lg">More Activity</a>
				        </div>

		        	</div> <!-- /.container -->


	<div class="modal fade galleryModal" id="activityModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-1.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-1(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Development of Outcome Based Curriculum</h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryoModal -->


						<div class="modal fade galleryModal" id="activityModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-2.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-2(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Development of Outcome Based Curriculum</h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryModal -->


						<!-- activitymodel3 -->

						<div class="modal fade galleryModal" id="activityModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-3.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-3(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Workshop on Data Management and Report Writing and EPR 					Facing </h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryModal -->



						<!-- activitymodel4 -->


						<div class="modal fade galleryModal" id="activityModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-5.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-5(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Outsourcing / Freelancing in CoU</h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryModal -->



						<!-- activitymodel5 -->


						<div class="modal fade galleryModal" id="activityModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-5.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-5(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Workshop on Data Management and Report Writing and EPR 					Facing </h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryModal -->


						



						<!-- activitymodel6 -->


						<div class="modal fade galleryModal" id="activityModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-6.jpg" alt="">
						        		<img class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/img/Activity/act-6(2).jpg" alt="">
						        	</div>

						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3>Workshop/training on Workshop on DWorkshop/training on Business Research Methods: How to write a research proposal?</h3>
						        			<strong>Venue :</strong> <p>Virtual Class-Room, Administrative building (Ground Flore),  CoU</p>
						        			<strong>Date of Performance:</strong>  <p>06/08/ 2018</p>

						        			<strong>Chief Guest :</strong><p>  Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p>

						        			<strong>Resource Persons :</strong><p> Prof.  Dr. Salleh  ABD Rashid , Director for Sustainable leadership Academic Center 					University  Sain,  Malayasia<br>Prof.  Dr.  KKDS Ranaweera, Department of Food Science and Technology, University of 	Sri Jayewardenepura, Nugegoda,Sri Lanka. </p> 
						        			<strong>Chair :</strong><p> Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC,  Comilla University </p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div>



		        </section>
		        <!-- activity end -->
*/ ?>