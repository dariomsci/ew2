<div class="container">
	<div class="row" id="pwd-container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<section class="login-form">
				<form method="post" action="<?php echo url_for('auth/login')?>"
					role="login">
					
					<?php if(@getimagesize('images/logos/logo_emp.png')){
						echo '<img src="images/logos/logo_emp.png" class="img-responsive" alt="" />';
					}else{
						echo '<img src="images/logos/logo_emp_NO-DISPON.png" class="img-responsive" alt="" />';
					}?>
						<input type="usuario"
						name="usuario" placeholder="Usuario" required
						class="form-control input-lg" /> <input type="password"
						class="form-control input-lg" id="password" name="password"
						placeholder="Password" required="" />

					<div class="pwstrength_viewport_progress"></div>

					<button type="submit" name="go"
						class="btn btn-lg btn-primary btn-block">Ingresar</button>
					
					<div class="bs-example" data-example-id="simple-alerts">
						<!-- <a href="#">Create account</a> or <a href="#">reset password</a> -->
						<?php $m = $sf_user->getFlash('error'); 
	  						if (!empty($m)){
	  							echo '<div class="alert alert-danger " role="alert">
										<strong>Alerta! </strong>'.$m.'
	  								</div>';
	  						 }	?>
					</div>
					
					
				</form>
				<div class="form-links">
					<a href="http://www.msci.com.ar" target="_blanc">www.msci.com.ar</a>
				</div>
			</section>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>