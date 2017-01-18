<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Entidad', 'doctrine');

/**
 * BaseEntidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $codigo_id
 * @property string $razsoc
 * @property string $cuit
 * @property integer $codvend
 * @property string $direccion
 * @property string $mail
 * @property string $telefono
 * @property integer $esprov
 * @property integer $esclie
 * 
 * @method integer getCodigoId()  Returns the current record's "codigo_id" value
 * @method string  getRazsoc()    Returns the current record's "razsoc" value
 * @method string  getCuit()      Returns the current record's "cuit" value
 * @method integer getCodvend()   Returns the current record's "codvend" value
 * @method string  getDireccion() Returns the current record's "direccion" value
 * @method string  getMail()      Returns the current record's "mail" value
 * @method string  getTelefono()  Returns the current record's "telefono" value
 * @method integer getEsprov()    Returns the current record's "esprov" value
 * @method integer getEsclie()    Returns the current record's "esclie" value
 * @method Entidad setCodigoId()  Sets the current record's "codigo_id" value
 * @method Entidad setRazsoc()    Sets the current record's "razsoc" value
 * @method Entidad setCuit()      Sets the current record's "cuit" value
 * @method Entidad setCodvend()   Sets the current record's "codvend" value
 * @method Entidad setDireccion() Sets the current record's "direccion" value
 * @method Entidad setMail()      Sets the current record's "mail" value
 * @method Entidad setTelefono()  Sets the current record's "telefono" value
 * @method Entidad setEsprov()    Sets the current record's "esprov" value
 * @method Entidad setEsclie()    Sets the current record's "esclie" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEntidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('entidad');
        $this->hasColumn('codigo_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('razsoc', 'string', 50, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('cuit', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
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
        $this->hasColumn('direccion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
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
        $this->hasColumn('telefono', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('esprov', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('esclie', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}