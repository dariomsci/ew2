<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Catalogo', 'doctrine');

/**
 * BaseCatalogo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codalfa
 * @property string $descri
 * @property integer $codart
 * @property integer $valatr1
 * @property integer $valatr2
 * @property integer $valatr3
 * @property integer $valatr4
 * @property integer $codfam
 * @property integer $codsfa
 * @property integer $codrub
 * @property integer $codmar
 * @property integer $codlin
 * @property integer $unistk
 * @property integer $univta
 * @property integer $canstk
 * @property date $fecrea
 * @property integer $canpes
 * @property integer $canxenv
 * @property integer $espromo
 * @property integer $codage
 * @property string $alfacor
 * @property integer $activo
 * @property Famistk $Famistk
 * @property Subfstk $Subfstk
 * @property Subfstk $Subfstk_3
 * @property Rubrstk $Rubrstk
 * @property Rubrstk $Rubrstk_5
 * @property Rubrstk $Rubrstk_6
 * @property Marcstk $Marcstk
 * @property Linestk $Linestk
 * @property Tipounid $Tipounid
 * 
 * @method string   getCodalfa()   Returns the current record's "codalfa" value
 * @method string   getDescri()    Returns the current record's "descri" value
 * @method integer  getCodart()    Returns the current record's "codart" value
 * @method integer  getValatr1()   Returns the current record's "valatr1" value
 * @method integer  getValatr2()   Returns the current record's "valatr2" value
 * @method integer  getValatr3()   Returns the current record's "valatr3" value
 * @method integer  getValatr4()   Returns the current record's "valatr4" value
 * @method integer  getCodfam()    Returns the current record's "codfam" value
 * @method integer  getCodsfa()    Returns the current record's "codsfa" value
 * @method integer  getCodrub()    Returns the current record's "codrub" value
 * @method integer  getCodmar()    Returns the current record's "codmar" value
 * @method integer  getCodlin()    Returns the current record's "codlin" value
 * @method integer  getUnistk()    Returns the current record's "unistk" value
 * @method integer  getUnivta()    Returns the current record's "univta" value
 * @method integer  getCanstk()    Returns the current record's "canstk" value
 * @method date     getFecrea()    Returns the current record's "fecrea" value
 * @method integer  getCanpes()    Returns the current record's "canpes" value
 * @method integer  getCanxenv()   Returns the current record's "canxenv" value
 * @method integer  getEspromo()   Returns the current record's "espromo" value
 * @method integer  getCodage()    Returns the current record's "codage" value
 * @method string   getAlfacor()   Returns the current record's "alfacor" value
 * @method integer  getActivo()    Returns the current record's "activo" value
 * @method Famistk  getFamistk()   Returns the current record's "Famistk" value
 * @method Subfstk  getSubfstk()   Returns the current record's "Subfstk" value
 * @method Subfstk  getSubfstk3()  Returns the current record's "Subfstk_3" value
 * @method Rubrstk  getRubrstk()   Returns the current record's "Rubrstk" value
 * @method Rubrstk  getRubrstk5()  Returns the current record's "Rubrstk_5" value
 * @method Rubrstk  getRubrstk6()  Returns the current record's "Rubrstk_6" value
 * @method Marcstk  getMarcstk()   Returns the current record's "Marcstk" value
 * @method Linestk  getLinestk()   Returns the current record's "Linestk" value
 * @method Tipounid getTipounid()  Returns the current record's "Tipounid" value
 * @method Catalogo setCodalfa()   Sets the current record's "codalfa" value
 * @method Catalogo setDescri()    Sets the current record's "descri" value
 * @method Catalogo setCodart()    Sets the current record's "codart" value
 * @method Catalogo setValatr1()   Sets the current record's "valatr1" value
 * @method Catalogo setValatr2()   Sets the current record's "valatr2" value
 * @method Catalogo setValatr3()   Sets the current record's "valatr3" value
 * @method Catalogo setValatr4()   Sets the current record's "valatr4" value
 * @method Catalogo setCodfam()    Sets the current record's "codfam" value
 * @method Catalogo setCodsfa()    Sets the current record's "codsfa" value
 * @method Catalogo setCodrub()    Sets the current record's "codrub" value
 * @method Catalogo setCodmar()    Sets the current record's "codmar" value
 * @method Catalogo setCodlin()    Sets the current record's "codlin" value
 * @method Catalogo setUnistk()    Sets the current record's "unistk" value
 * @method Catalogo setUnivta()    Sets the current record's "univta" value
 * @method Catalogo setCanstk()    Sets the current record's "canstk" value
 * @method Catalogo setFecrea()    Sets the current record's "fecrea" value
 * @method Catalogo setCanpes()    Sets the current record's "canpes" value
 * @method Catalogo setCanxenv()   Sets the current record's "canxenv" value
 * @method Catalogo setEspromo()   Sets the current record's "espromo" value
 * @method Catalogo setCodage()    Sets the current record's "codage" value
 * @method Catalogo setAlfacor()   Sets the current record's "alfacor" value
 * @method Catalogo setActivo()    Sets the current record's "activo" value
 * @method Catalogo setFamistk()   Sets the current record's "Famistk" value
 * @method Catalogo setSubfstk()   Sets the current record's "Subfstk" value
 * @method Catalogo setSubfstk3()  Sets the current record's "Subfstk_3" value
 * @method Catalogo setRubrstk()   Sets the current record's "Rubrstk" value
 * @method Catalogo setRubrstk5()  Sets the current record's "Rubrstk_5" value
 * @method Catalogo setRubrstk6()  Sets the current record's "Rubrstk_6" value
 * @method Catalogo setMarcstk()   Sets the current record's "Marcstk" value
 * @method Catalogo setLinestk()   Sets the current record's "Linestk" value
 * @method Catalogo setTipounid()  Sets the current record's "Tipounid" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCatalogo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('catalogo');
        $this->hasColumn('codalfa', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('descri', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('codart', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valatr1', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valatr2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valatr3', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valatr4', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codfam', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codsfa', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codrub', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codmar', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('codlin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('unistk', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('univta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('canstk', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('fecrea', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
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
        $this->hasColumn('canxenv', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('espromo', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('codage', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('alfacor', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('activo', 'integer', 1, array(
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
        $this->hasOne('Famistk', array(
             'local' => 'codfam',
             'foreign' => 'codfam'));

        $this->hasOne('Subfstk', array(
             'local' => 'codfam',
             'foreign' => 'codfam'));

        $this->hasOne('Subfstk as Subfstk_3', array(
             'local' => 'codsfa',
             'foreign' => 'codsfa'));

        $this->hasOne('Rubrstk', array(
             'local' => 'codfam',
             'foreign' => 'codfam'));

        $this->hasOne('Rubrstk as Rubrstk_5', array(
             'local' => 'codsfa',
             'foreign' => 'codsfa'));

        $this->hasOne('Rubrstk as Rubrstk_6', array(
             'local' => 'codrub',
             'foreign' => 'codrub'));

        $this->hasOne('Marcstk', array(
             'local' => 'codmar',
             'foreign' => 'codmar'));

        $this->hasOne('Linestk', array(
             'local' => 'codlin',
             'foreign' => 'codlin'));

        $this->hasOne('Tipounid', array(
             'local' => 'unistk',
             'foreign' => 'coduni'));
    }
}