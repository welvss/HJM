
	<section class="body-sign-in">
	  	<div class="container">
	  		<div class="row">
	  			<div class="small-12">
	  				<div class="panel-white" id="sign-in-panel">
						<div class="row">
							<div class="small-12 columns">
							<section>
								<h4>Please Sign in</h4>
							</section>
								<hr>
								<section id="sign-in-content">
								<p>Sign in to <a href="#">HJM Dental Laboratory</a></p>
									<?php echo form_open('Home/login_validation');?>
										<input type="text" name="username" placeholder="HJM ID*" aria-describedby="exampleHelpText" required>
										 <span class="form-error">
											Username Required!
										</span>
										<input type="password" name="password" placeholder="password*" aria-describedby="exampleHelpText" required>
										<span class="form-error">
											Password Required!
										</span>
										<?php echo form_submit('submit', 'Sign In', 'class="button primary"');?>
										<br>
									</form>
								<a href="#">Forget your HJM Account or password?</a>
								<br>
								<span><?php echo validation_errors();?></span>
								</section>
							</div>
						</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</section>
   