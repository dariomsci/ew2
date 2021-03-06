<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuarios', 'doctrine');

/**
 * BaseUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuarios_id
 * @property string $webuser
 * @property string $webpwd
 * @property integer $codvend
 * @property integer $admin
 * @property string $nombre
 * @property string $mail
 * @property integer $codzona
 * 
 * @method integer  getUsuariosId()  Returns the current record's "usuarios_id" value
 * @method string   getWebuser()     Returns the current record's "webuser" value
 * @method string   getWebpwd()      Returns the current record's "webpwd" value
 * @method integer  getCodvend()     Returns the current record's "codvend" value
 * @method integer  getAdmin()       Returns the current record's "admin" value
 * @method string   getNombre()      Returns the current record's "nombre" value
 * @method string   getMail()        Returns the current record's "mail" value
 * @method integer  getCodzona()     Returns the current record's "codzona" value
 * @method Usuarios setUsuariosId()  Sets the current record's "usuarios_id" value
 * @method Usuarios setWebuser()     Sets the current record's "webuser" value
 * @method Usuarios setWebpwd()      Sets the current record's "webpwd" value
 * @method Usuarios setCodvend()     Sets the current record's "codvend" value
 * @method Usuarios setAdmin()       Sets the current record's "admin" value
 * @method Usuarios setNombre()      Sets the current record's "nombre" value
 * @method Usuarios setMail()        Sets the current record's "mail" value
 * @method Usuarios setCodzona()     Sets the current record's "codzona" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuarios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuarios');
        $this->hasColumn('usuarios_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('webuser', 'string', 64, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 64,
             ));
        $this->hasColumn('webpwd', 'string', 64, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 64,
             ));
        $this->hasColumn('codvend', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('admin', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('mail', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('codzona', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}