		<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

					?>

<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url();?>save-event" method="post" enctype="multipart/form-data">
						  <fieldset>
						


							<div class="control-group">
							  <label class="control-label" for="date01">Image Title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name='title'>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" name="date">
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Short Details </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="details"></textarea>
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