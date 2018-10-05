  <!-- slider content -->
               
                <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
				    <!-- Indicators -->
				    <!-- <ol class="carousel-indicators">
				        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
				        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
				        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
				        <li data-target="#x-corp-carousel" data-slide-to="3"></li>
				    </ol> -->

				    <!-- Wrapper for slides -->
				    
				    <div class="carousel-inner" role="listbox">
				     <?php foreach($home_slider as $hs) { ?>
				        <div class="item <?php if($hs->id==3) echo 'active'; ?>">
				            <img src="<?php echo base_url().$hs->image; ?>" alt="Hero Slide">
				            <!--Slide Image-->

				            <div class="container">
				                <div class="carousel-caption slider-cap">
				                    <h1 class="animated lightSpeedIn"><?php echo $hs->title ; ?></h1>

				                    
				                </div>
				                <!--.carousel-caption-->
				            </div>
				            <!--.container-->
				        </div>
				         <?php } ?>
				     
				    </div>
				

				    <!--.carousel-inner-->

				    <!-- Controls -->
				    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
				        <i class="fa fa-angle-left" aria-hidden="true"></i>
				        <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
				        <i class="fa fa-angle-right" aria-hidden="true"></i>
				        <span class="sr-only">Next</span>
				    </a>

				   				</div>
                 <!-- /end slider section -->
