<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Proxent', 'doctrine');

/**
 * BaseProxent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $codent
 * @property integer $codart
 * @property decimal $pbonif1
 * @property decimal $pbonif2
 * @property decimal $precio
 * @property decimal $prebon
 * 
 * @method integer getCodent()  Returns the current record's "codent" value
 * @method integer getCodart()  Returns the current record's "codart" value
 * @method decimal getPbonif1() Returns the current record's "pbonif1" value
 * @method decimal getPbonif2() Returns the current record's "pbonif2" value
 * @method decimal getPrecio()  Returns the current record's "precio" value
 * @method decimal getPrebon()  Returns the current record's "prebon" value
 * @method Proxent setCodent()  Sets the current record's "codent" value
 * @method Proxent setCodart()  Sets the current record's "codart" value
 * @method Proxent setPbonif1() Sets the current record's "pbonif1" value
 * @method Proxent setPbonif2() Sets the current record's "pbonif2" value
 * @method Proxent setPrecio()  Sets the current record's "precio" value
 * @method Proxent setPrebon()  Sets the current record's "prebon" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProxent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('proxent');
        $this->hasColumn('codent', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codart', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('precio', 'decimal', 15, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             'scale' => '3',
             ));
        $this->hasColumn('prebon', 'decimal', 15, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             'scale' => '3',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}