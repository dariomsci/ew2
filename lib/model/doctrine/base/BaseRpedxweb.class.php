<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rpedxweb', 'doctrine');

/**
 * BaseRpedxweb
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $nroped
 * @property integer $nroren
 * @property integer $codent
 * @property date $fecha
 * @property float $codart
 * @property integer $valatr1
 * @property integer $valatr2
 * @property integer $valatr3
 * @property integer $valatr4
 * @property float $cantidad
 * @property float $precio
 * @property float $porcbon
 * @property float $impsub
 * @property integer $canpes
 * @property integer $codage
 * @property integer $canxenv
 * @property integer $cantpal
 * @property decimal $pbonif1
 * @property decimal $pbonif2
 * @property decimal $precbon
 * @property date $fecent
 * @property Cpedxweb $Cpedxweb
 * 
 * @method integer  getNroped()   Returns the current record's "nroped" value
 * @method integer  getNroren()   Returns the current record's "nroren" value
 * @method integer  getCodent()   Returns the current record's "codent" value
 * @method date     getFecha()    Returns the current record's "fecha" value
 * @method float    getCodart()   Returns the current record's "codart" value
 * @method integer  getValatr1()  Returns the current record's "valatr1" value
 * @method integer  getValatr2()  Returns the current record's "valatr2" value
 * @method integer  getValatr3()  Returns the current record's "valatr3" value
 * @method integer  getValatr4()  Returns the current record's "valatr4" value
 * @method float    getCantidad() Returns the current record's "cantidad" value
 * @method float    getPrecio()   Returns the current record's "precio" value
 * @method float    getPorcbon()  Returns the current record's "porcbon" value
 * @method float    getImpsub()   Returns the current record's "impsub" value
 * @method integer  getCanpes()   Returns the current record's "canpes" value
 * @method integer  getCodage()   Returns the current record's "codage" value
 * @method integer  getCanxenv()  Returns the current record's "canxenv" value
 * @method integer  getCantpal()  Returns the current record's "cantpal" value
 * @method decimal  getPbonif1()  Returns the current record's "pbonif1" value
 * @method decimal  getPbonif2()  Returns the current record's "pbonif2" value
 * @method decimal  getPrecbon()  Returns the current record's "precbon" value
 * @method date     getFecent()   Returns the current record's "fecent" value
 * @method Cpedxweb getCpedxweb() Returns the current record's "Cpedxweb" value
 * @method Rpedxweb setNroped()   Sets the current record's "nroped" value
 * @method Rpedxweb setNroren()   Sets the current record's "nroren" value
 * @method Rpedxweb setCodent()   Sets the current record's "codent" value
 * @method Rpedxweb setFecha()    Sets the current record's "fecha" value
 * @method Rpedxweb setCodart()   Sets the current record's "codart" value
 * @method Rpedxweb setValatr1()  Sets the current record's "valatr1" value
 * @method Rpedxweb setValatr2()  Sets the current record's "valatr2" value
 * @method Rpedxweb setValatr3()  Sets the current record's "valatr3" value
 * @method Rpedxweb setValatr4()  Sets the current record's "valatr4" value
 * @method Rpedxweb setCantidad() Sets the current record's "cantidad" value
 * @method Rpedxweb setPrecio()   Sets the current record's "precio" value
 * @method Rpedxweb setPorcbon()  Sets the current record's "porcbon" value
 * @method Rpedxweb setImpsub()   Sets the current record's "impsub" value
 * @method Rpedxweb setCanpes()   Sets the current record's "canpes" value
 * @method Rpedxweb setCodage()   Sets the current record's "codage" value
 * @method Rpedxweb setCanxenv()  Sets the current record's "canxenv" value
 * @method Rpedxweb setCantpal()  Sets the current record's "cantpal" value
 * @method Rpedxweb setPbonif1()  Sets the current record's "pbonif1" value
 * @method Rpedxweb setPbonif2()  Sets the current record's "pbonif2" value
 * @method Rpedxweb setPrecbon()  Sets the current record's "precbon" value
 * @method Rpedxweb setFecent()   Sets the current record's "fecent" value
 * @method Rpedxweb setCpedxweb() Sets the current record's "Cpedxweb" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRpedxweb extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rpedxweb');
        $this->hasColumn('nroped', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('nroren', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('codent', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('codart', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('valatr1', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('valatr2', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('valatr3', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('valatr4', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cantidad', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('precio', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('porcbon', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('impsub', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('canpes', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('codage', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('canxenv', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cantpal', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('pbonif1', 'decimal', 15, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             'scale' => '2',
             ));
        $this->hasColumn('pbonif2', 'decimal', 15, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             'scale' => '2',
             ));
        $this->hasColumn('precbon', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             'scale' => '2',
             ));
        $this->hasColumn('fecent', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cpedxweb', array(
             'local' => 'nroped',
             'foreign' => 'nroped'));
    }
}