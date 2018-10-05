<div class="box-content">
<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

					?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Serial</th>
								  <th>Title</th>
								
								  <th>Created date</th>
								   <th>Image</th>

								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	foreach ($show_all_sliders as $v_img) {
						  		?>
						  		<tr>
								<td><?php echo $v_img->id;?></td>
								<td class="center"><?php echo $v_img->title;?></td>
								<td class="center">
									<?php echo $v_img->created_at;?>
								</td>
								<td class="center">
								<img src="<?php echo base_url().$v_img->image;?>" height="150px" width="100px;" />
									
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-slider/<?php echo $v_img->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" id="delete" href="<?php echo base_url()?>delete-slider/<?php echo $v_img->id;?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

						  		<?php
						  	}
						  ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->