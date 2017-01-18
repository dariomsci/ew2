<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rubrstk', 'doctrine');

/**
 * BaseRubrstk
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $codfam
 * @property integer $codsfa
 * @property integer $codrub
 * @property string $desrub
 * @property Doctrine_Collection $Catalogo
 * @property Doctrine_Collection $Catalogo_5
 * @property Doctrine_Collection $Catalogo_6
 * 
 * @method integer             getCodfam()     Returns the current record's "codfam" value
 * @method integer             getCodsfa()     Returns the current record's "codsfa" value
 * @method integer             getCodrub()     Returns the current record's "codrub" value
 * @method string              getDesrub()     Returns the current record's "desrub" value
 * @method Doctrine_Collection getCatalogo()   Returns the current record's "Catalogo" collection
 * @method Doctrine_Collection getCatalogo5()  Returns the current record's "Catalogo_5" collection
 * @method Doctrine_Collection getCatalogo6()  Returns the current record's "Catalogo_6" collection
 * @method Rubrstk             setCodfam()     Sets the current record's "codfam" value
 * @method Rubrstk             setCodsfa()     Sets the current record's "codsfa" value
 * @method Rubrstk             setCodrub()     Sets the current record's "codrub" value
 * @method Rubrstk             setDesrub()     Sets the current record's "desrub" value
 * @method Rubrstk             setCatalogo()   Sets the current record's "Catalogo" collection
 * @method Rubrstk             setCatalogo5()  Sets the current record's "Catalogo_5" collection
 * @method Rubrstk             setCatalogo6()  Sets the current record's "Catalogo_6" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRubrstk extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rubrstk');
        $this->hasColumn('codfam', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codsfa', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codrub', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('desrub', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Catalogo', array(
             'local' => 'codfam',
             'foreign' => 'codfam'));

        $this->hasMany('Catalogo as Catalogo_5', array(
             'local' => 'codsfa',
             'foreign' => 'codsfa'));

        $this->hasMany('Catalogo as Catalogo_6', array(
             'local' => 'codrub',
             'foreign' => 'codrub'));
    }
}