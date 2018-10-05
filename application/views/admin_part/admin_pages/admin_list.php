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
								  <th>Admin id</th>
								  <th>Admin Name</th>
								  <th>Admin Email</th>
								  <th>Admin Role</th>
								 

								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	foreach ($all_admin_info as $v_admin) {
						  		?>
						  		<tr>
								<td><?php echo $v_admin->admin_id;?></td>
								<td class="center"><?php echo $v_admin->admin_name;?></td>
								<td class="center"><?php echo $v_admin->admin_email;?></td>
								<td class="center">
									<?php if($v_admin->admin_role==1) echo "Admin"; elseif($v_admin->admin_role==2) echo "Editor";?>
								</td>
								
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-admin/<?php echo $v_admin->admin_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" id="delete" href="<?php echo base_url()?>delete-admin/<?php echo $v_admin->admin_id;?>">
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