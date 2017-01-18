<?php

/**
 * auth actions.
 *
 * @package    jobeet
 * @subpackage auth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class authActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->usuarioss = Doctrine_Core::getTable('usuarios')
      ->createQuery('a')
      ->execute();
  }

  public function executeLogin(sfWebRequest $request)
  {
  	$this->setLayout('layout_login');
  	
  	if ($request->isMethod(sfRequest::POST)) {
  		$usu = $request->getParameter('usuario');
  		$pass = $request->getParameter('password');
  		
  		//echo $usu .'---'.$pass; die;
  		
  		$usuario = Doctrine_Core::getTable('usuarios')
  		->createQuery('a')
  		->where('webuser =? ', $usu)
  		->addwhere('webpwd =? ', $pass)
  		->fetchOne();
  		
//   		print_r($usuario);
//   		echo "poi"; die;
		if (!empty($usuario)){
			
			$q = Doctrine_Query::create()
			->from('entxuser')
			->where('usuarios_id = ?', $usuario->getusuarios_id());
			$entidadxusuario = $q->fetchOne();
			
			if(!empty($entidadxusuario))
			{
				$e = Doctrine_Query::create()
				->from('entidad')
				->where('codigo_id = ?', $entidadxusuario->getentidad_id());
				$entidad = $e->fetchOne();
				
				
				$this->getUser()->setAuthenticated(true);
				
				$this->getUser()->setAttribute('id', $usuario->getUsuarios_id());
				$this->getUser()->setAttribute('usrid', $usuario->getWebuser());
				$this->getUser()->setAttribute('entidad_id', $entidadxusuario->getentidad_id());
				$this->getUser()->setAttribute('entidad', $entidad->getrazsoc());
				$this->getUser()->setAttribute('usuario', $usuario->getNombre());
				
				$this->redirect('@homepage');
			}
			
		}else{
			$this->getUser()->setFlash('error', 'Nombre de usuario o contraseña incorrectos.');
			$this->redirect('@homepage');
			
		}
		die;
  	}
  	
  }
  
  public function executeLogout(sfWebRequest $request)
  {
  	//borro la sesion
  	$this->getUser()->setAuthenticated(false);
    
  	$this->redirect('@homepage');
  }
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new usuariosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new usuariosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($usuarios = Doctrine_Core::getTable('usuarios')->find(array($request->getParameter('usuarios_id'))), sprintf('Object usuarios does not exist (%s).', $request->getParameter('usuarios_id')));
    $this->form = new usuariosForm($usuarios);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($usuarios = Doctrine_Core::getTable('usuarios')->find(array($request->getParameter('usuarios_id'))), sprintf('Object usuarios does not exist (%s).', $request->getParameter('usuarios_id')));
    $this->form = new usuariosForm($usuarios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($usuarios = Doctrine_Core::getTable('usuarios')->find(array($request->getParameter('usuarios_id'))), sprintf('Object usuarios does not exist (%s).', $request->getParameter('usuarios_id')));
    $usuarios->delete();

    $this->redirect('auth/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuarios = $form->save();

      $this->redirect('auth/edit?usuarios_id='.$usuarios->getUsuariosId());
    }
  }
}
