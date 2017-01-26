<h1>Resumen Contable
	<a target="_blank" href="<?php echo url_for('rencbtec/rencbtecPDF') ?>" >
		<span class="glyphicon glyphicon-download" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Descargar Resumen Contable" style="font-size: 25px; padding-left: 15px; color: #31708f;"></span> 
	</a>
</h1>

<!-- --------------------------------------- -->
 
<form class="form-inline" id="formulario" style="padding-top: 0px;" action="<?php echo url_for('rencbtec/index') ?>"  method="post" >
	<?php include_partial('rencbtef/filtro', array('filtrar' => $filtrar, 'hfecha' => @$hfecha, 'dfecha' => @$dfecha, 'comprobantes' => $comprobantes, 'resumenes' => $resumenes, 'comprobante' => $comprobante, 'resumen' => $resumen, 'entresum_razsoc' => @$entresum_razsoc)) ?>
</form> 
<!-- --------------------------------------- -->


<table class="table table-striped table-hover">
  <thead>
    <tr>
      <!-- <th>Id</th> -->
      <th>Fecha</th>
      <th>Comprobante</th>
      <th>Numero</th>
      <th>Importe</th>
      <th>Subtotal</th>
      <th>Detalle</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($pager->getResults() as $rencbtec): 
    @$subtotal = $subtotal + $rencbtec->getImporte(); ?>
    <tr>
      <!-- <td>
      	<a class="btn btn-xs btn-info" href="<?php //echo url_for('rencbtef/edit?id='.$rencbtec->getId()) ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
      </td> -->
      <td><?php echo date("d/m/Y",strtotime($rencbtec->getFecha())) ?></td>
      <td style="width: 12%;"><?php echo $rencbtec->getDescom() ?></td>
      <td style="width: 12%;">
      <?php echo $rencbtec->getLetra() .' ' .$rencbtec->getTorig() .' ' .$rencbtec->getNorig()?>	
      </td>
      <td style="text-align: right;">
      	<?php echo number_format($rencbtec->getImporte(), 2, ",", ".")?>
      </td>
      <td style="color: <?php echo $subtotal > 0?' red':' #006400'?>; text-align: right;">
      	<?php echo number_format($subtotal, 2, ",", "."); ?>
      </td>
      <td><?php echo $rencbtec->getDetalle() ?></td>
      <td align="center">
	      <?php if ($rencbtec->getCodcom()!=0 && $rencbtec->getCodcom()!=9920 && $rencbtec->getCodcom()!=9921 && $rencbtec->getCodcom()!=9930 && $rencbtec->getCodcom()!= 9931):?>
	      	<a href="<?php echo url_for('rencbtec/printCbte?id='.$rencbtec->getId());?>" target="_blank"> 
	      		<span class="glyphicon glyphicon-download" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Descargar Comprobante"></span>
	      	</a> 
	      <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
	<?php if ($total != 0) {?>
		<tr>
			<td colspan="3"></td>
			<td style="text-align: right;">
				<p><strong class="text-info">
					<?php echo ($total == 0)? '' : 'Total: ' .$total ?></strong></p>
			</td> 
			<td colspan="3"></td>	
		</tr>
	<?php }?>
  </tbody>
</table>
<div class="btn-group btn-group-justified" >
  <div style="text-align: center; padding: 0.5%;">
	<?php if ($pager->getLastPage()>1):?>
		<a class="btn btn-default" role="button" href="<?php echo url_for('rencbtec/index') ?>?pag=1"><span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span></a>
		<a class="btn btn-default" role="button" href="<?php echo url_for('rencbtec/index') ?>?pag=<?php echo $pager->getPreviousPage() ?>"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></a>
		
		<?php foreach ($pager->getLinks() as $page):?>
			<?php if($pager->getPage() != $page): ?>
				<a style="font-size: 11px;" class="btn btn-default" role="button" href="<?php echo url_for('rencbtec/index') ?>?pag=<?php echo $page ?>"><span aria-hidden="true"><?php echo $page ?></span></a>
			<?php else: ?>
				<a style="font-weight: bold; font-size: 11px;" class="btn btn-default" role="button"><span aria-hidden="true"><?php echo $page ?></span></a>
			<?php endif; ?>
				
		<?php endforeach; ?>
		<a class="btn btn-default" role="button" href="<?php echo url_for('rencbtec/index') ?>?pag=<?php echo$pager->getNextPage() ?>"><span class="glyphicon glyphicon-forward" aria-hidden="true"></span></a>
		<a class="btn btn-default" role="button" href="<?php echo url_for('rencbtec/index') ?>?pag=<?php echo $pager->getLastPage() ?>"><span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span></a>
	<?php endif;?>
  </div>
</div>
