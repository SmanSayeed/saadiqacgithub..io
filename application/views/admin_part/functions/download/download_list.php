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
								  <th>Description</th>
								  <th>Upload Date</th>
								   <th>Material</th>

								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	foreach ($show_all_downloads as $v_img) {
						  		?>
						  		<tr>
								<td><?php echo $v_img->id;?></td>
								<td class="center"><?php echo $v_img->title;?></td>
								<td class="center"><?php echo $v_img->description;?></td>
							
								<td class="center">
									<?php echo $v_img->created_at;?>
								</td>
								<td class="center">
								<a href="<?php echo base_url().$v_img->file;?>">Download<a/>
									
								</td>
								<td class="center">

								<?php if($v_img->hide_key==1){ ?>
									<a class="btn btn-success" href="<?php echo base_url()?>hide-download/<?php echo $v_img->id;?>" id="hide">
										<i class="halflings-icon white  eye-open"></i>  
									</a>	
							<?php	} else{?>
									<a class="btn btn-success" href="<?php echo base_url()?>hide-download/<?php echo $v_img->id;?>" id="unhide" >
										<i class="halflings-icon white lock"></i>  
									</a>
								<?php } ?>
									
									<a class="btn btn-info" href="<?php echo base_url()?>edit-download/<?php echo $v_img->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" id="delete" href="<?php echo base_url()?>delete-download/<?php echo $v_img->id;?>">
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