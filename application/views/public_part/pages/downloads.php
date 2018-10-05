 <section id="material" class=" section-padding">
		            <div class="container">
		            	<div class="row text-center">
		            		<div class="col-xs-12 ">
		            			<h2 class="section-title wow zoomIn">Download Corner</h2>
	            			</div>
					            <table class="table table-bordered table-responsive">
					            	<tr>
					            		<th style="text-align: left">Sl No</th>
					            		<th style="text-align: left">Material Description</th>
					            		<th style="text-align: left">Download</th>
					            	</tr>
					            		<?php $i=1; foreach ($home_download as $v) {?>
					            	<tr>
					            
					            	
					            		<td style="text-align: left"><?php echo $i++; ?></td>
					            		<td style="text-align: left"><?php echo $v->title; ?></td>
					            		<td style="text-align: left" class="table-hover"><a target="_blank"href="<?php echo $v->file; ?>" style="text-decoration: none; color:#B5906D">Click</a></td>
					            	</tr>
					            	<?php } ?>
					            	

					            </table>
				            
			            </div>
		            </div>
		            </section>
