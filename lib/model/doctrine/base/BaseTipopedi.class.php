<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tipopedi', 'doctrine');

/**
 * BaseTipopedi
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $codigo
 * @property string $descri
 * 
 * @method decimal  getCodigo() Returns the current record's "codigo" value
 * @method string   getDescri() Returns the current record's "descri" value
 * @method Tipopedi setCodigo() Sets the current record's "codigo" value
 * @method Tipopedi setDescri() Sets the current record's "descri" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipopedi extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipopedi');
        $this->hasColumn('codigo', 'decimal', 2, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('descri', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}