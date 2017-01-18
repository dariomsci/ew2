<?php

/**
 * fichares actions.
 *
 * @package    jobeet
 * @subpackage fichares
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ficharesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//     $this->ficharess = Doctrine_Core::getTable('fichares')
//       ->createQuery('a')
//       ->execute();
  	$entidad_id = $this->getUser()->getAttribute('entidad_id');
  	 
  	$this->usuarios_id = $request->getParameter('usuarios_id');
  	
  	$this->f = Doctrine_Core::getTable('fichares')
  	->createQuery('a')
  	->where('codigo =? ', $entidad_id);
  	 
  	//$this->filtrar( $entidad_id, $request );
  	
  	$this->entidad = Doctrine_Core::getTable('entidad')
  	->createQuery('a')
  	->where('codigo_id =? ', $entidad_id)
  	->fetchOne();
  	
  	$this->resumenes = Doctrine_Core::getTable('entresum')
  	->createQuery('a')
  	->where('codigo =? ', $entidad_id)
  	->addOrderBy('razsoc DESC')
  	->execute();
  	$this->ficharess = $this->f->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ficharesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ficharesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($fichares = Doctrine_Core::getTable('fichares')->find(array($request->getParameter('id'))), sprintf('Object fichares does not exist (%s).', $request->getParameter('id')));
    $this->form = new ficharesForm($fichares);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($fichares = Doctrine_Core::getTable('fichares')->find(array($request->getParameter('id'))), sprintf('Object fichares does not exist (%s).', $request->getParameter('id')));
    $this->form = new ficharesForm($fichares);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($fichares = Doctrine_Core::getTable('fichares')->find(array($request->getParameter('id'))), sprintf('Object fichares does not exist (%s).', $request->getParameter('id')));
    $fichares->delete();

    $this->redirect('fichares/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $fichares = $form->save();

      $this->redirect('fichares/edit?id='.$fichares->getId());
    }
  }
}
