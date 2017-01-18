<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="dfecha"]'); //our dfecha input has the name "dfecha"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
		
		var date_input=$('input[name="hfecha"]'); 
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

<?php if($filtrar == 1){?>
<div style="padding-bottom: 5px;"> 
	<div class="col-xs-12 col-sm-6 col-md-8">
		<p class="text-warning">
		<?php if( !empty($dfecha)):
			echo "Desde:" .date("d/m/Y",strtotime($dfecha)); endif;?>
		<?php if( !empty($hfecha)) :
			echo "Hasta: " .date("d/m/Y",strtotime($hfecha)); endif;?>
			
		<?php if( !empty($comprobante)) :
			echo "Comprobante: " .$comprobante; endif;?>
		<?php if( !empty($resumen)) :
			echo "Resumen: " .$resumen .' - '; if ($entresum_razsoc)echo $entresum_razsoc;?></p>
		<?php endif;?>	
		</p>
	</div>
	<div class="col-xs-6 col-md-4">
	<?php if($filtrar):?>
	<button type="submit" class="btn btn-danger" name="quitar" id="quitar" >Quitar Filtro</button>
	<?php endif; ?>
	</div>
</div>

		
	<?php }else{?>


<div class="form-group">
	<div class="bootstrap-iso">
		<div class="container-fluid">
			<div class="row">
				<div class="form-group ">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						</div>
						<input class="form-control" id="dfecha" name="dfecha" autocomplete="off" 
							placeholder="Fecha Desde" type="text" />
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<div class="form-group">
	<div class="bootstrap-iso">
		<div class="container-fluid" style="">
			<div class="row">
				<div class="form-group ">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						</div>
						<input class="form-control" id="hfecha" name="hfecha" autocomplete="off" 
							placeholder="Fecha Hasta" type="text" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="form-group">
		<select class="form-control" id="comprobante" name="comprobante" >
			<option value="">Tipo Comprobante</option>
			  <?php $band = ''; foreach ($comprobantes as $comprobante):?>
				  <?php if ($band != $comprobante->getDescom()):?>
				  	<option value="<?php echo $comprobante->getDescom()?>"><?php echo  $comprobante->getDescom()?></option>
				  	<?php $band = $comprobante->getDescom()?>
				  <?php endif; ?>
			  <?php endforeach; ?>
		</select>
  </div>
  
  <div class="form-group">
	<select class="form-control" id="resumen" name="resumen">
		<option value="">Tipo Resumen</option>
		<?php foreach ($resumenes as $resumen):?>
			<option value="<?php echo $resumen['codres']?>"><?php echo  $resumen['razsoc']?></option> 
		<?php endforeach; ?>
	</select>
  </div>

<?php }?>
	
	<?php if(!$filtrar):?>
		<button type="submit" class="btn btn-success">Enviar</button>
	<?php endif; ?>
	
	<!-- Este input lo pongo oculto con el valor que tiene $filtrar para ocultar o mostrar el div contenedor
	del filtro	-->
	<input type="hidden" id="mostrar" name="mostrar" value="<?php echo $filtrar;?>">