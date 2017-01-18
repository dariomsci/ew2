<?php

/**
 * rencbtec actions.
 *
 * @package    jobeet
 * @subpackage rencbtec
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rencbtecActions extends sfActions
{

	public function executeIndex(sfWebRequest $request)
	{
		$entidad_id = $this->getUser()->getAttribute('entidad_id');
		
		$this->pager = new sfDoctrinePager('rencbtec', 30) // cantidad de reg x pag.
;
		// lo preparo para poder filtrar
		$this->q = Doctrine_Query::create()->from('rencbtec a')->where('codigo =? ', $entidad_id);
		
		$this->filtrar($entidad_id, $request);
		
		$this->q->addOrderBy('fecha ASC, hora ASC');
		
		// print_r($this->q->getSqlQuery());
		
		$this->pager->setQuery($this->q);
		$this->pager->setPage($request->getParameter('pag', 1));
		$this->pager->init();
		
		if ($request->getParameter('pag', 1) != 1) {
			$pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
			$query = " SELECT importe FROM rencbtec r";
			$query .= sprintf(" WHERE codigo = %d", $entidad_id);
			//
			if (! empty($this->dfecha))
				$query .= sprintf(" AND r.fecha >= %s", '\'' . $this->dfecha . '\'');
			
			if (! empty($this->hfecha))
				$query .= sprintf(" AND r.fecha <= %s", '\'' . $this->hfecha . '\'');
			
			if (! empty($this->comprobante))
				$query .= sprintf(" AND r.descom  = %s", '\'' . $this->comprobante . '\'');
			
			if (! empty($this->resumen))
				$query .= sprintf(" AND r.codres = %d", $this->resumen);
				//
			$query .= sprintf(" ORDER BY fecha ASC, hora ASC");
			
			$query .= sprintf(" LIMIT %d", ($request->getParameter('pag', 1) - 1) * 30);
			
			$stmt = $pdo->prepare($query);
			$stmt->execute();
			$subtotales = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			// print_r($subtotales); die;
			
			foreach ($subtotales as $subtotal) {
				$this->subtotal += $subtotal['importe'];
			}
		}
		
		$this->entidad = Doctrine_Core::getTable('entidad')->createQuery('a')
			->where('codigo_id =? ', $entidad_id)
			->fetchOne();
		
		$this->comprobantes = Doctrine_Core::getTable('rencbtef')->createQuery('a')
			->where('codigo =? ', $entidad_id)
			->addOrderBy('descom DESC')
			->execute();
		
		$this->resumenes = Doctrine_Core::getTable('entresum')->createQuery('a')
			->where('codigo =? ', $entidad_id)
			->addOrderBy('razsoc DESC')
			->fetchArray();
	}
	
	public function filtrar($entidad_id, sfWebRequest $request)
	{
		if ($request->isMethod(sfRequest::POST)) {
			
			$this->filtrar = $request->getParameter('mostrar');
			$this->filtrar = empty($this->filtrar);
			
			// echo $this->dfecha = $request->getParameter('dfecha') .' -----';
			// echo $this->hfecha = $request->getParameter('hfecha') .' <br>';
			
			// Formateo la fecha de esta manera xq el format de php me daba un error
			if (! empty($request->getParameter('dfecha'))) {
				$dfecha = explode("/", $request->getParameter('dfecha'));
				$this->dfecha = $dfecha[2] . '-' . $dfecha[1] . '-' . $dfecha[0];
			}
			
			if (! empty($request->getParameter('hfecha'))) {
				$hfecha = explode("/", $request->getParameter('hfecha'));
				$this->hfecha = $hfecha[2] . '-' . $hfecha[1] . '-' . $hfecha[0];
			}
			
			$this->comprobante = $request->getParameter('comprobante');
			$this->resumen = $request->getParameter('resumen');
			
			if ($this->resumen) {
				$q = Doctrine_Core::getTable('entresum')->createQuery('a')
					->where('codres =? ', $this->resumen)
					->andwhere('codigo =? ', $entidad_id)
					->fetchOne();
				
				$this->entresum_razsoc = $q->getRazsoc();
			}
			
			if ($this->filtrar) {
				// agrego las condiciones del filtro desde el form
				$this->getUser()->setAttribute('dfecha', $this->dfecha);
				$this->getUser()->setAttribute('hfecha', $this->hfecha);
				$this->getUser()->setAttribute('comprobante', $this->comprobante);
				$this->getUser()->setAttribute('resumen', $this->resumen);
				
				$this->getUser()->setAttribute('entresum_razsoc', $this->entresum_razsoc);
				
				$this->getUser()->setAttribute('filtrar', $this->filtrar);
			} else {
				$this->getUser()->setAttribute('dfecha', '');
				$this->getUser()->setAttribute('hfecha', '');
				$this->getUser()->setAttribute('comprobante', '');
				$this->getUser()->setAttribute('resumen', '');
				
				$this->getUser()->setAttribute('entresum_razsoc', '');
				
				$this->getUser()->setAttribute('filtrar', '');
			}
		} else {
			$this->dfecha = $this->getUser()->getAttribute('dfecha');
			$this->hfecha = $this->getUser()->getAttribute('hfecha');
			$this->comprobante = $this->getUser()->getAttribute('comprobante');
			$this->resumen = $this->getUser()->getAttribute('resumen');
			
			$this->entresum_razsoc = $this->getUser()->getAttribute('entresum_razsoc');
			
			$this->filtrar = $this->getUser()->getAttribute('filtrar');
		}
		
		if (! empty($this->dfecha))
			$this->q->andWhere('fecha >=?', $this->dfecha);
		
		if (! empty($this->hfecha))
			$this->q->andWhere('fecha <=?', $this->hfecha);
		
		if (! empty($this->comprobante))
			$this->q->andWhere('descom =?', $this->comprobante);
		
		if (! empty($this->resumen))
			$this->q->andWhere('codres =?', $this->resumen);
		
		//------------------------
		$this->leo_total($entidad_id, $request);
		//------------------------
	}
	
	public function leo_total($entidad_id, sfWebRequest $request)
	{
		$q = Doctrine_Core::getTable('rencbtec')->createQuery('a')->where('codigo =?  ', $entidad_id);
	
		if (! empty($this->dfecha)) {
			$q->andWhere('fecha >=?', $this->dfecha);
		}
		if (! empty($this->hfecha)) {
			$q->andWhere('fecha <=?', $this->hfecha);
		}
		if (! empty($this->comprobante)) {
			$q->andWhere('descom =?', $this->comprobante);
		}
		if (! empty($this->resumen)) {
			$q->andWhere('codres =?', $this->resumen);
		}
	
		$importes = $q->execute();
		// ----------
		// echo 'desde'. $this->dfecha .'<br>';
		// echo 'hasta'. $this->hfecha.'<br>';
		// echo $this->comprobante.'<br>';
		// echo $this->resumen.'<br>';
		// print_r($this->q->getSqlQuery()); die;
		// ------------
		// print_r($importes); die;
	
		$tot = 0;
	
		foreach ($importes as $importe) {
			$tot = $tot + $importe->getImporte();
		}
		$this->total = number_format($tot, 2, ",", ".");
	
		//print_r($this->total); //die;
	}	
	public function executeNew(sfWebRequest $request)
	{
		$this->form = new rencbtecForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		
		$this->form = new rencbtecForm();
		
		$this->processForm($request, $this->form);
		
		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($rencbtec = Doctrine_Core::getTable('rencbtec')->find(array(
			$request->getParameter('id')
		)), sprintf('Object rencbtec does not exist (%s).', $request->getParameter('id')));
		$this->form = new rencbtecForm($rencbtec);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($rencbtec = Doctrine_Core::getTable('rencbtec')->find(array(
			$request->getParameter('id')
		)), sprintf('Object rencbtec does not exist (%s).', $request->getParameter('id')));
		$this->form = new rencbtecForm($rencbtec);
		
		$this->processForm($request, $this->form);
		
		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();
		
		$this->forward404Unless($rencbtec = Doctrine_Core::getTable('rencbtec')->find(array(
			$request->getParameter('id')
		)), sprintf('Object rencbtec does not exist (%s).', $request->getParameter('id')));
		$rencbtec->delete();
		
		$this->redirect('rencbtec/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$rencbtec = $form->save();
			
			$this->redirect('rencbtec/edit?id=' . $rencbtec->getId());
		}
	}

	public function executePrintCbte($request)
	{
		$t = $this->request->getParameter('id');
		// print_r($t); die;
		
		$rencbtec = Doctrine_Core::getTable('rencbtec')->createQuery('a')
			->where('id =? ', $t)
			->fetchOne();
		
		// print_r($rencbtecs); die;
		// print_r($rencbtec->getCodemp() .' ' .$rencbtec->getCodcom()); die;
		
		$filename = tempnam("/home/master/ARCHIVOS/", "impcbte_");
		$valores = $rencbtec->getCodemp() . ' ' . $rencbtec->getCodcom() . ' ' . $rencbtec->getCodtal() . ' ' . $rencbtec->getNumero() . ' 1 pdf 1 ' . $filename . '.pdf';
		// print_r('valores: ' .$valores); die;
		exec('/local/EternumII/Real/bin/ess52/impcbte.sh ' . $valores);
		
		$ultimo_pdf = $filename . '.pdf';
		$falsa_url_pdf = 'impcbte' . $rencbtec->getCodcom() . '_' . $rencbtec->getCodtal() . '_' . $rencbtec->getNumero() . '.pdf';
		header('Content-type: application/pdf');
		header('Content-Disposition: attachment; filename="' . $falsa_url_pdf . '"');
		readfile($ultimo_pdf);
		// unlink($filename);
		return sfView::NONE;
	}

	public function executeRencbtecPDF()
	{
		$entidad_id = $this->getUser()->getAttribute('entidad_id');
		
		$entidad_id = 73;
		$q = Doctrine_Query::create()->from('rencbtec a')->where('codigo =? ', $entidad_id);
		$q->addOrderBy('fecha ASC');
		$pp = $q->execute();
		
		$entidad = Doctrine_Core::getTable('entidad')->createQuery('a')
			->where('codigo_id =? ', $entidad_id)
			->fetchOne();
		// -------------------
		$config = sfTCPDFPluginConfigHandler::loadConfig();
		
		// pdf object
		$pdf = new MysfTCPDF('L');
		$pdf->SetFont('helvetica', '', 9);
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->AddPage();
		$pdf->SetFont('helvetica', 'B', 11);
		$pdf->Cell(0, 0, 'RESUMEN CONTABLE', 0, 1, 'L');
		$pdf->SetFont('helvetica', 'N', 9);
		$pdf->ln();
		$pdf->Cell(0, 0, 'Entidad: '/*.$entidad->getRazsoc()*/, 0, 1, 'L');
		$pdf->SetLineWidth(0.208);
		
		// $pdf->setFillcolor(0);
		// $pdf->SetTextColor(254);
		$pdf->SetLineWidth(0.208);
		// $pdf->SetDrawColor(79, 129, 189);
		$pdf->SetDrawColor(0);
		$pdf->setFillcolor(79, 129, 189);
		$pdf->SetTextColor(254);
		
		$pdf->SetFont('helvetica', 'B', 9);
		$pdf->Cell(20, 0, 'FECHA', 0, 0, 'C', '1');
		$pdf->Cell(60, 0, 'COMPROBANTE', 0, 0, 'L', '1');
		$pdf->Cell(30, 0, 'NUMERO', 0, 0, 'R', '1');
		$pdf->Cell(30, 0, 'IMPORTE', 0, 0, 'R', '1');
		$pdf->Cell(20, 0, 'SUB TOTAL', 0, 0, 'R', '1');
		$pdf->Cell(110, 0, 'DETALLE', 0, 1, 'L', '1');
		$i = 0;
		$pdf->SetFont('helvetica', 'N', 9);
		$pdf->SetFillColor(224);
		$pdf->SetTextColor(0);
		
		$subtotal = 0;
		
		foreach ($pp as $item) {
			$fondo = $i % 2 ? true : false;
			$pdf->Cell(20, 0, date("d/m/Y", strtotime($item->getFecha())), '0', 0, 'L', $fondo);
			$pdf->Cell(60, 0, $item->getDescom(), '0', 0, 'L', $fondo);
			$pdf->Cell(30, 0, $item->getLetra() . ' ' . $item->getTorig() . ' ' . $item->getNorig(), '0', 0, 'L', $fondo);
			$pdf->Cell(30, 0, number_format($item->getImporte(), 2, ",", "."), '0', 0, 'R', $fondo);
			
			$subtotal += $item->getImporte();
			
			$pdf->Cell(20, 0, number_format($subtotal, 2, ",", "."), '0', 0, 'R', $fondo);
			$pdf->Cell(110, 0, substr($item->getDetalle(), 0, 58), '0', 1, 'L', $fondo);
			
			$i ++;
			@$total = $total + $item->getImporte();
		} // end foreach
		$pdf->ln(2);
		$pdf->SetFont('helvetica', 'B', 9);
		$pdf->Cell(110, 0, 'TOTAL', '0', 0, 'R');
		$pdf->Cell(30, 0, number_format(@$total, 2, ",", "."), '0', 1, 'R');
		// output
		$pdf->Output('Resumen_Contable.pdf');
		
		return sfView::NONE;
	}
}
