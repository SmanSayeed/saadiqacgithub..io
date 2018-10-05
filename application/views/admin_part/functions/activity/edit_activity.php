		<?php 
					$message=$this->session->userdata('message');

					if($message){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}

		?>

<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url();?>update-activity" method="post" enctype="multipart/form-data">
						  <fieldset>

						  <div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" name="date">
							  </div>
							</div>
							
							
						<input type="hidden" class="input-xlarge" id="date01" name='id' value="<?php echo $all_activity_info_by_id->id;?>" />

							<div class="control-group">
							  <label class="control-label" for="date01">Activity Title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name='title' value="<?php echo $all_activity_info_by_id->title;?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">First Image  input</label>
							  <div>
							 
							  </div>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image1">
							  </div>

							   <img src="<?php echo base_url().$all_activity_info_by_id->image1; ?>"  height="150px" width="100px" />

							</div> 

							<div class="control-group">
							  <label class="control-label" for="fileInput">Second Image input</label>
							  <div>
							 
							  </div>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image2">
							  </div>

							   <img src="<?php echo base_url().$all_activity_info_by_id->image2; ?>"  height="150px" width="100px" />

							</div> 

							

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $all_activity_info_by_id->description;?></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Quote </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="details"><?php echo $all_activity_info_by_id->quote;?></textarea>
							  </div>
							</div>


							<?php
							if($all_activity_info_by_id->hide_key==1){ ?>
								<label class="checkbox-inline">
     							 <input type="checkbox" value="1" name="hide_key" checked>Make This Visible to Public
    						</label>
    						<?php } 
							else{ ?>
								<label class="checkbox-inline">
     							 <input type="checkbox" value="1" name="hide_key">Make This Visible to Public
    						</label>

							<?php } ?>
							

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->