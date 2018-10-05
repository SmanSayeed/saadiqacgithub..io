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
								  <th>Name</th>
								  <th>Email</th>
								  <th>Phone</th>
								  <th>Date</th>
								   <th>Message</th>

								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	foreach ($show_all_feedbacks as $v_img) {
						  		?>
						  		<tr>
								<td><?php echo $v_img->id;?></td>
								<td class="center"><?php echo $v_img->name;?></td>
								<td class="center"><?php echo $v_img->email;?></td>
								<td class="center"><?php echo $v_img->phone;?></td>
								<td class="center">
									<?php echo $v_img->created_at;?>
								</td>
								<td class="center">
							
											<?php echo $v_img->message;?>

								</td>
								<td class="center">

								<?php if($v_img->view_key==1){ ?>
									<a class="btn btn-success" href="<?php echo base_url()?>hide-feedback/<?php echo $v_img->id;?>" id="hide" style="color:green;background-color:white;" >
										seen
									</a>	
							<?php	} else{?>
									<a class="btn btn-success" href="<?php echo base_url()?>hide-feedback/<?php echo $v_img->id;?>" id="unhide" style="color:red;background-color:white" >
										  
										Not seen
									</a>
								<?php } ?>
									
								
									<a class="btn btn-danger" id="delete" href="<?php echo base_url()?>delete-feedback/<?php echo $v_img->id;?>">
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