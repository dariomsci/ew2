<h1>Movimiento de Granos Detallado	

<a target="_blank" href="<?php echo url_for("fichadet/FichadetPDF?cereal=$cereal&cosecha=$cosecha&id=$id_usuario&codres=$codres") ?>">
	<span class="glyphicon glyphicon-download" aria-hidden="true"
		data-toggle="tooltip" data-placement="bottom"
		title="Descargar Mov. Detallado de Cereales"
		style="font-size: 25px; padding-left: 15px; color: #31708f;"></span></a>
</h1>

<table class="table table-striped table-hover">
	  <thead>
	    <tr>
	      <th>Fecha</th>
	      <th>Cosecha</th>
	      <th>Cereal</th>
	      <th>Comprobante</th>
	      <th>Número</th>
	      <th>Romaneo</th>
	      <th>Certificado</th>
	      <th>Transferencia</th>
	      <th>1116BC</th>
	      <th>Parcial</th>
	      <th>Retiro</th>
	      <th>Contrato</th>
	      <th>Saldo</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($pager->getResults()  as $fichadet): ?>
	    <tr>
	      <td>
	      	<?php echo date("d/m/Y",strtotime($fichadet->getFecha())) ?>
	      </td>
	      <td>
	      	<?php echo $fichadet->getCosecha_descos() ?>
	      </td>
	      <td><?php echo $fichadet->getCereal_descer() ?></td>
	      <td><?php echo $fichadet->getDescom() ?></td>
	      <td><?php echo $fichadet->getNumpre() ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos1(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos2(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos3(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos4(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos5(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos6(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilos7(), 2, ",", ".") ?></td>
	      <td class="numerico"><?php echo number_format($fichadet->getKilstk(), 2, ",", ".") ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	  <tr>
	      <th colspan="5"></th>
	      <th class="numerico">
	      	<?php echo @$kilos1;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilos2;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilos3;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilos4;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilos5;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilos6;?>
	      </th>                    
	      <th class="numerico">
	      	<?php echo @$kilos7;?>
	      </th>  
	      <th class="numerico">
	      	<?php echo @$kilstk;?>
	      </th>  
	  </tr>  
	</table>
	
	
	
	
	<div class="btn-group btn-group-justified" >
	  <div style="text-align: center; padding: 0.5%;">
		<?php if ($pager->getLastPage()>1):?>
			<a class="btn btn-default" role="button" href="<?php echo url_for('fichadet/index') ?>?pag=1"><span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span></a>
			<a class="btn btn-default" role="button" href="<?php echo url_for('fichadet/index') ?>?pag=<?php echo $pager->getPreviousPage() ?>"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></a>
			
			<?php foreach ($pager->getLinks() as $page):?>
				<?php if($pager->getPage() != $page): ?>
					<a style="font-size: 11px;" class="btn btn-default" role="button" href="<?php echo url_for('fichadet/index') ?>?pag=<?php echo $page ?>"><span aria-hidden="true"><?php echo $page ?></span></a>
				<?php else: ?>
					<a style="font-weight: bold; font-size: 11px;" class="btn btn-default" role="button"><span aria-hidden="true"><?php echo $page ?></span></a>
				<?php endif; ?>
					
			<?php endforeach; ?>
									
			<a class="btn btn-default" role="button" href="<?php echo url_for('fichadet/index') ?>?pag=<?php echo$pager->getNextPage() ?>"><span class="glyphicon glyphicon-forward" aria-hidden="true"></span></a>
			<a class="btn btn-default" role="button" href="<?php echo url_for('fichadet/index') ?>?pag=<?php echo $pager->getLastPage() ?>"><span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span></a>
		<?php endif;?>
	  </div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	