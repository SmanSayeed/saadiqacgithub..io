 <section id="gallery" class="team-section gallery-section section-padding">
			        <div class="container">
		              	<div class="row text-center">
		                	<div class="col-xs-12">
		                  		<h2 class="section-title wow zoomIn">GALLERY</h2>
		                	</div>
		              	</div> <!-- /.row -->


				        <div class="row">
				            <div id="grid" class="gallery">

		        <?php 
		        	foreach ($home_gallery as $v) {
		        	
		        	
		        ?>
				                <div class="gallery-item col-xs-12 col-sm-6 col-md-4" data-groups='["all", "marketing", "development", "branding"]'>
				                	<div class="single-gallery">
								        <figure class="css-hover-effect">
								            <img src="<?php echo base_url().$v->image; ?>" alt="" />
								            <figcaption class="figure-caption">
								              <div class="figure-link">
								                <a data-toggle="modal" data-target="#galleryModal<?php echo $v->id; ?>" href="#"><i class="flaticon-slanting1"></i></a>
								              </div>
								              <div class="figure-info">
								                <span> <?php echo $v->title;?></span>
								                <h2><a href="#"></a></h2>
								              </div>
								            </figcaption>   
								        </figure>
				                    </div><!-- /.single-gallery -->
				                </div>
				               


						<!-- portfolio details in modal, add individual modal for individual item -->
						<!-- Modal -->
						<div class="modal fade galleryModal" id="galleryModal<?php echo $v->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-wrong6"></i></span></button>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6 col-xs-12">
						        		<img class="img-responsive" src="<?php echo base_url().$v->image;?>" alt="">
						        	</div>
						        	<div class="col-md-6">
						        		<div class="gallery-details">
						        			<h3><?php echo $v->title;?></h3>
						        			<?php echo $v->description;?>
											
						        		</div>
						        	</div>
						        </div>
						      </div><!-- /.modal-body -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.galleryoModal -->



   <?php  } ?>

				       <div class="more-work-button text-center">
				        	<a href="<?php echo base_url()?>main-gallery" class="btn btn-primary btn-lg">More Images</a>
				        </div>
			        </div>
	</section>	