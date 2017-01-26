<?php

/**
 * Usuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Usuarios extends BaseUsuarios
{
	public function getEnti()
	{
		// 			print_r($rcas->getCodest()); die;
		$entxusr = Doctrine_Core::getTable('entxuser')
		->createQuery('co')
		->where('usuarios_id = ?', $this->getUsuariosId())
		->fetchOne();
	
		if (!empty($entxusr)){
			$entidad = Doctrine_Core::getTable('entidad')
			->createQuery('co')
			->where('codigo_id = ?', $entxusr->getEntidad_id())
			->fetchOne();
				
			// 				print_r($entxusr->getUsuariosId()); die;
	
			if (!empty($entidad)){
				return $entidad->getRazsoc();
			}else{
				return ' - ';
			}
		}else {return ' - ';}
	}
	
	
	public function getCodEnti()
	{
		$entxusr = Doctrine_Core::getTable('entxuser')
		->createQuery('co')
		->where('usuarios_id = ?', $this->getUsuariosId())
		->fetchOne();
	
		if (!empty($entxusr)){
			$entidad = Doctrine_Core::getTable('entidad')
			->createQuery('co')
			->where('codigo_id = ?', $entxusr->getEntidad_id())
			->fetchOne();
				
			// 				print_r($entxusr->getUsuariosId()); die;
	
			if (!empty($entidad)){
				return $entidad->getCodigo_id();
			}else{
				return ' - ';
			}
		}else {return ' - ';}
	}
	
	public function getDescri_vend()
	{
		$articulo = Doctrine_Core::getTable('vendedor')
		->createQuery('ven')
		->where('codigo = ?', $this->getCodvend())
		->fetchOne();
	
		if (!empty($articulo)){
			return $articulo->getdescripcion();
		}else{
			return ' - ';
		}
	}
	
	
	public function proximo()
	{
	
		$pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
		$query = "SELECT max(usuarios_id) as ultimo from usuarios";
		$stmt = $pdo->prepare($query);
		$stmt->execute();
	
		$val = $stmt->fetchObject();
	
		// 		print_r($val+1); die;
	
		return $val->ultimo +1;
	}
	
	
	
	public function save(Doctrine_Connection $con = null)
	{
		if($this->isNew())
		{
			$this->setUsuariosId($this->proximo());
			// 			$this->setWebuser($this->proximo());
			// 			$this->setNrofam($this->proximo());
		}
		parent::save($con);
	}
}
