<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Admin</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

						<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

					?>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url()?>save-admin" method="post" >
						  <fieldset>
							<div>
							  <label class="control-label" for="date01">Admin name</label>
							  <div class="controls">
								<input type="text"  id="date01" name="admin_name">
							  </div>
							</div>

							<div class="control-group" class="hidden">
							 
							</div>

							<div class="control-group">
							  <label class="control-label" for="date02">Admin Email</label>
							  <div class="controls">
								<input type="text" id="date01" name="admin_email">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date03">Admin Password</label>
							  <div class="controls">
								<input type="text"  id="date01" name="admin_password">
							  </div>
							</div>

							

							<div class="control-group">
							  <label class="control-label" for="fileInput">Admin Role</label>

							  <div class="controls">
								   <select id="selectError3" name="role">
									<option value='1'>Admin</option>
									<option value='2'>Editor</option>
									
								  </select>
							  </div>
							  	 
							</div>  
<!--
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							-->
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->