<?php

/**
 * fichadet actions.
 *
 * @package    jobeet
 * @subpackage fichadet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fichadetActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//     $this->fichadets = Doctrine_Core::getTable('fichadet')
//       ->createQuery('a')
//       ->execute();

  	$entidad_id = $this->getUser()->getAttribute('entidad_id');
  	 
  	$this->id_usuario = $request->getParameter('id');
  	$this->cosecha = $request->getParameter('cosecha');
  	$this->cereal = $request->getParameter('cereal');
  	$this->codres = $request->getParameter('codres');
  	 
  	$id_usuario = $request->getParameter('id');
  	$cosecha = $request->getParameter('cosecha');
  	$cereal = $request->getParameter('cereal');
  	$codres = $request->getParameter('codres');
  	
  	$this->pager = new sfDoctrinePager(
  		'fichadet', 50 //cantidad de reg x pag.
  		);
  	//lo preparo para poder filtrar
  	$this->q = Doctrine_Query::create()
  	->from('fichadet a')
  	->where('codigo =? ', $id_usuario)
  	->andwhere('cereal =? ', $cereal)
  	->andwhere('cosecha =? ', $cosecha);
  	
  	//   	$f = $fichares->getcodres();
  	if (!empty($codres)){
  		// 	  		$codres = $fichares->getcodres();
  		$this->q -> andwhere('codres =? ', $codres);
  	}
  	
  	
  	//************
  	 
  	$this->q->addOrderBy('fecha ASC');
  	
  	
  	$this->pager->setQuery($this->q);
  	$this->pager->setPage($request->getParameter('pag', 1));
  	$this->pager->init();
  	
  	
  	$this->leo_totales($cosecha, $cereal, $id_usuario, $codres);
  	
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new fichadetForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new fichadetForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($fichadet = Doctrine_Core::getTable('fichadet')->find(array($request->getParameter('id'))), sprintf('Object fichadet does not exist (%s).', $request->getParameter('id')));
    $this->form = new fichadetForm($fichadet);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($fichadet = Doctrine_Core::getTable('fichadet')->find(array($request->getParameter('id'))), sprintf('Object fichadet does not exist (%s).', $request->getParameter('id')));
    $this->form = new fichadetForm($fichadet);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($fichadet = Doctrine_Core::getTable('fichadet')->find(array($request->getParameter('id'))), sprintf('Object fichadet does not exist (%s).', $request->getParameter('id')));
    $fichadet->delete();

    $this->redirect('fichadet/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $fichadet = $form->save();

      $this->redirect('fichadet/edit?id='.$fichadet->getId());
    }
  }

	public function executeFichadetPDF(sfWebRequest $request)
	{
		$entidad_id = $this->getUser()->getAttribute('entidad_id');
		
		$id_usuario = $request->getParameter('id');
		$cosecha = $request->getParameter('cosecha');
		$cereal = $request->getParameter('cereal');
		$codres = $request->getParameter('codres');
		
		$q = Doctrine_Query::create()->from('fichadet a')
			->where('codigo =? ', $id_usuario)
			->andwhere('cereal =? ', $cereal)
			->andwhere('cosecha =? ', $cosecha);
		
		if (! empty($codres)) {
			$q->andwhere('codres =? ', $codres);
		}
		
		// ************
		//$this->filtrar($request, $cosecha, $cereal, $id_usuario, $codres);
		
		$q->addOrderBy('fecha ASC');
		
		$fichadets = $q->execute();
		
		$entidad = Doctrine_Core::getTable('entidad')->createQuery('a')
			->where('codigo_id =? ', $entidad_id)
			->fetchOne();
		
		$config = sfTCPDFPluginConfigHandler::loadConfig();
		// pdf object
		$pdf = new MysfTCPDF('L');
		$pdf->SetFont('helvetica', '', 9);
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->AddPage();
		$pdf->SetFillColor(210, 210, 210);
		$pdf->Cell(0, 0, 'MOVIMIENTO DE GRANOS DETALLADO  ', '0', 1, 'L');
		$pdf->Cell(0, 0, 'Entidad: ' . $entidad->getRazsoc(), '0', 1, 'R');
		$i = 0;
		$k1 = 0;
		$k2 = 0;
		$k3 = 0;
		$k4 = 0;
		$k5 = 0;
		$k6 = 0;
		$k7 = 0;
		$kKilstk = 0;
		$band = '';
		
		foreach ($fichadets as $item) {
			$fondo = $i%2?true:false;
			if ($band != $item->getCosecha()) {
				$pdf->Cell(0, 0, $item->getCosecha_descos() . ' Cereal: ' . $item->getCereal_descer() , '0', 1, 'L');
				$band = $item->getCosecha();
				$pdf->SetFont('helvetica', 'B', 9);
				$pdf->Cell(0, 0, ' '  , '0', 1, 'C', $fondo);
				$pdf->Cell(20, 0, ' Fecha '  , '0', 0, 'C', $fondo);
				$pdf->Cell(30, 0, ' Comprobante '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Nuemro '  , '0', 0, 'C', $fondo);
				$pdf->Cell(20, 0, ' Romaneo '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Certificado '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Transferencia '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' 1116BC '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Parcial '  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Retiro'  , '0', 0, 'C', $fondo);
				$pdf->Cell(25, 0, ' Contrato '  , '0', 0, 'C', $fondo);
				$pdf->Cell(20, 0, ' Saldo '  , '0', 1, 'C', $fondo);
				$pdf->SetFont('helvetica', 'N', 9);
			}
			
			$pdf->Cell(20, 0, date("d/m/Y", strtotime($item->getFecha())) , '0', 0, 'C', $fondo);
			$pdf->Cell(30, 0, $item->getDescom()   , '0', 0, 'C', $fondo);
			$pdf->Cell(25, 0, $item->getNumpre(), '0', 0, 'C', $fondo);
			$pdf->Cell(20, 0, number_format($item->getKilos1(), 2, ",", ".") , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos2(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos3(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos4(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos5(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos6(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(25, 0, number_format($item->getKilos7(), 2, ",", ".")  , '0', 0, 'R', $fondo);
			$pdf->Cell(20, 0, number_format($item->getKilstk(), 2, ",", ".")  , '0', 1, 'R', $fondo);
			
			$i ++;
			
			$k1 = $k1 + $item->getKilos1();
			$k2 = $k2 + $item->getKilos2();
			$k3 = $k3 + $item->getKilos3();
			$k4 = $k4 + $item->getKilos4();
			$k5 = $k5 + $item->getKilos5();
			$k6 = $k6 + $item->getKilos6();
			$k7 = $k7 + $item->getKilos7();
			$kKilstk = $kKilstk + $item->getKilstk();
		} // end foreach
		
		$pdf->SetFont('helvetica', 'B', 9);
		
		$pdf->Cell(95, 0, number_format($k1, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k2, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k3, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k4, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k5, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k6, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(25, 0, number_format($k7, 2, ",", "."), '0', 0, 'R');
		$pdf->Cell(20, 0, number_format($kKilstk, 2, ",", "."), '0', 1, 'R');
		$pdf->SetFont('helvetica', 'N', 9);
		
		// output
		$pdf->Output('Movimiento_Granos_Detallado.pdf');
		
		return sfView::NONE;
	}
	
  public function leo_totales($cosecha, $cereal, $id_usuario, $codres)
  {
	$importes = Doctrine_Core::getTable('fichadet')->createQuery('a')
		->where('codigo =? ', $id_usuario)
		->andwhere('cereal =? ', $cereal)
		->andwhere('cosecha =? ', $cosecha);
	
	if (! empty($this->dfecha)) {
		$importes->andWhere('fecha >=?', $this->dfecha);
	}
	if (! empty($this->hfecha)) {
		$importes->andWhere('fecha <=?', $this->hfecha);
	}
	
	if (! empty($this->comprobante)) {
		$importes->andWhere('descom =?', $this->comprobante);
	}
	
	if (! empty($codres)) {
		$importes->andWhere('codres =?', $codres);
	}
	$imps = $importes->execute();
	
	$totalKilstk = 0;
	$totalKilos1 = 0;
	$totalKilos2 = 0;
	$totalKilos3 = 0;
	$totalKilos4 = 0;
	$totalKilos5 = 0;
	$totalKilos6 = 0;
	$totalKilos7 = 0;
	
	foreach ($imps as $importe) {
		$totalKilstk = $totalKilstk + $importe->getKilstk();
		$totalKilos1 = $totalKilos1 + $importe->getKilos1();
		$totalKilos2 = $totalKilos2 + $importe->getKilos2();
		$totalKilos3 = $totalKilos3 + $importe->getKilos3();
		$totalKilos4 = $totalKilos4 + $importe->getKilos4();
		$totalKilos5 = $totalKilos5 + $importe->getKilos5();
		$totalKilos6 = $totalKilos6 + $importe->getKilos6();
		$totalKilos7 = $totalKilos7 + $importe->getKilos7();
	}
	$this->kilos1 = number_format($totalKilos1, 2, ",", ".");
	$this->kilos2 = number_format($totalKilos2, 2, ",", ".");
	$this->kilos3 = number_format($totalKilos3, 2, ",", ".");
	$this->kilos4 = number_format($totalKilos4, 2, ",", ".");
	$this->kilos5 = number_format($totalKilos5, 2, ",", ".");
	$this->kilos6 = number_format($totalKilos6, 2, ",", ".");
	$this->kilos7 = number_format($totalKilos7, 2, ",", ".");
	$this->kilstk = number_format($totalKilstk, 2, ",", ".");
  }
  
}
