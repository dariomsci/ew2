<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body style="">
	<div class="row" style="width: 100%;">
	  <div class="col-xs-12 col-md-8">
		<div class="container-fluid" style="padding-left: 0px !important;">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3" style="padding-left: 3px !important;">
				<a  class="btn btn-primary navbar-btn" href="<?php echo url_for('rencbtec/index') ?>">Resumen Contable</a>
				<a  class="btn btn-primary navbar-btn" href="<?php echo url_for('rencbtef/index') ?>">Resumen Financiero</a>
				<a  class="btn btn-primary navbar-btn" href="<?php echo url_for('fichares/index') ?>">Ficha de Cereales</a>
				<a  class="btn btn-primary navbar-btn" href="<?php echo url_for('auth/logout') ?>">Salir</a>
				
			</div>
		</div>	  
	  </div>
	  <div class="col-xs-6 col-md-4" >
	  	<p class="text-info" style="float: right !important;">
	  		<?php echo $sf_user->getAttribute('entidad');?></p>
	  </div>
	</div>  

	
	<?php echo $sf_content ?>
  </body>
</html>
