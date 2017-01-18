<h1>Resumen de Cereales
	<a target="_blank" href="<?php //echo url_for('rencbtec/rencbtecPDF') ?>" >
		<span class="glyphicon glyphicon-download" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Descargar Resumen de Cereales" style="font-size: 25px; padding-left: 15px; color: #31708f;"></span> 
	</a>
</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th></th>
      <th>Cosecha</th>
      <th>Cereal</th>
      <th>Romaneo</th>
      <th>Certificado</th>
      <th>Transferencia</th>
      <th>1116BC</th>
      <th>Parcial</th>
      <th>Retiro</th>
      <th>Contrato</th>
      <th>Disponible</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ficharess as $fichares): ?>
    <tr>
      <td>
      	<?php 
      	$f = $fichares->getcodres();
      	if (!empty($f)){
      		$codres = $fichares->getcodres();
      	}else{
      		$codres = '';
      	}
		$url = 'fichadet/index?id='.$fichares->getCodigo().
		'&cereal='.$fichares->getcereal().
		'&cosecha='.$fichares->getcosecha().
		'&codres='.$codres ?>
		
      	<a class="btn btn-xs btn-info" href="<?php echo url_for($url) ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
      </td>
      <td><?php echo $fichares->getCosecha_descos() ?></td>
      <td><?php echo $fichares->getCereal_descer() ?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos1(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos2(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos3(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos4(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos5(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos6(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilos7(), 2, ",", ".")?></td>
      <td class="numerico"><?php echo number_format($fichares->getKilstk(), 2, ",", ".")?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

