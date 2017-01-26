<?php

/**
 * Usuarios form.
 *
 * @package    ctacteweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuariosForm extends BaseUsuariosForm
{
  public function configure()
  { 	
  	$q = new Doctrine_Query();
  	$q->addFrom('entidad');
  	$q->addWhere('razsoc !=  ?', '');
  	$q->addOrderBy('razsoc');
  	$entidades = $q->Execute();
  	//print_r($q->getSqlQuery()); die;  	
  	
  	
  	$ent['0'] = '';
   	foreach($entidades as $entidad )
  	{
  		$ent[$entidad->getCodigo_id()] = $entidad->getRazsoc(); 		
  	}  	
  	$a = '';
  	
  	
  	//--------------------------
//   	$r = new Doctrine_Query();
//   	$r->addFrom('vendedor');
//   	$r->addOrderBy('descripcion');
//   	$vendedores = $r->Execute();
  	
  	
//   	$vend['null'] = '';
//    	foreach($vendedores as $vendedor )
//   	{
//   		$vend[$vendedor->getCodigo()] = $vendedor->getDescripcion(); 		
//   	}
  	
//   	$v = ''; 	
  	
  	//--------------------------
  	if (!$this->isNew())
  	{
  		$e = Doctrine_Query::create()
  		->from('entxuser')
  		->Where("usuarios_id = ?", $this->getObject()->getUsuariosId());
  		$ent_usu= $e->Execute();
  		
  		$a = $ent_usu[0]->getEntidad_id();
  		
  		//---------------------------- 		
  		
  		//----------------------------
//   		print_r($a); die;
  	}
  	
  	$this->setDefault('entxusu', $a);
  	$this->setWidget('entxusu', new sfWidgetFormChoice(array('choices' => $ent)));
  	$this->setValidator('entxusu', new sfValidatorString(array('required'=>false)));  	

  	//----------------------
//   	$this->setDefault('codvend', $v);
//   	$this->setWidget('codvend', new sfWidgetFormChoice(array('choices' => $vend)));
  	$this->setValidator('codvend', new sfValidatorString(array('required'=>false)));
  	//-----------------------
  	
  	
  	$this->setWidget('webuser', new sfWidgetFormInput());
  	//$this->setValidator('webuser', new sfValidatorNumber(array('required'=>true)));
  	
  	$this->setValidator('webuser', new sfValidatorNumber(array(
        'required' => true
            ), array(
         'required'=>'Requerido',
         'invalid' => 'Debe de ingresar un numero' )));
            
  	$this->setValidator('webpwd', new sfValidatorString(array(
        'required' => true
            ), array(
         'required'=>'Requerido')));            
 	
  }
}
