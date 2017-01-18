<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Defecto', 'doctrine');

/**
 * BaseDefecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_defecto
 * @property integer $id_tipo
 * @property string $descri
 * 
 * @method integer getIdDefecto()  Returns the current record's "id_defecto" value
 * @method integer getIdTipo()     Returns the current record's "id_tipo" value
 * @method string  getDescri()     Returns the current record's "descri" value
 * @method Defecto setIdDefecto()  Sets the current record's "id_defecto" value
 * @method Defecto setIdTipo()     Sets the current record's "id_tipo" value
 * @method Defecto setDescri()     Sets the current record's "descri" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDefecto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('defecto');
        $this->hasColumn('id_defecto', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_tipo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('descri', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}