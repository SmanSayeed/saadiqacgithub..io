		<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

					?>

<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url();?>save-resource_person" method="post" enctype="multipart/form-data">
						  <fieldset>
						


							<div class="control-group">
							  <label class="control-label" for="date01">Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name='name'>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Company</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name='company'>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image">
							  </div>
							</div>

						
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Quote </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="quote"></textarea>
							  </div>
							</div>

						
							

							<label class="checkbox-inline">
     							 <input type="checkbox" value="1" name="hide_key">Make This Visible to Public
    						</label>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->