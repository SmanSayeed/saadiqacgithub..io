


							<div class="col-sm-3 col-md-3">
								<div class="footer-widget">
									<h3>Get in Touch</h3>
									<a href="#">+00 (123) 456 789</a>
									<a href="mailto:#">info@uicookies.com</a>
									<a class="feedback-modal" data-toggle="modal" data-target="#feedModal" href="#">Send us your feedback</a>

									<!-- Modal -->
									<div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="feedModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="feedModalLabel">Send us your feedback</h4>
									      </div>
									      <div class="modal-body">
											<form id="" action="<?php echo base_url();?>save-feedback" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
													</div>

													<div class="col-md-6">
													  <div class="form-group">
													    <label for="">Name</label>
													    <input id="" name="name" type="" class="form-control" required="" placeholder="Full name">
													  </div>
													</div>


													<div class="col-md-6">
													  <div class="form-group">
													    <label for="email">Email address</label>
													    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
													  </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="phone">Phone</label>
													    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone">
													  </div>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="subject">Subject</label>
													    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Subject">
													  </div>
													</div>
												</div>

												<div class="form-group text-area">
													<label for="message">Message</label>
													<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder="Message"></textarea>
												</div>

												<button type="submit" class="btn btn-primary">Send Message</button>
											</form>
									      </div>
									    </div>
									  </div>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->



