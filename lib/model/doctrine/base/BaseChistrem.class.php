<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Chistrem', 'doctrine');

/**
 * BaseChistrem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $nroped
 * @property integer $codent
 * @property date $fecha
 * @property time $hora
 * @property float $impsub
 * @property float $imptot
 * @property integer $estado
 * @property integer $retcli
 * @property integer $lugent
 * @property integer $tipoped
 * @property integer $tipopago
 * @property integer $coddes
 * @property string $observ
 * @property integer $codage
 * @property integer $favorito
 * @property integer $codemp
 * @property integer $codcom
 * @property integer $codtal
 * @property integer $numero
 * @property float $impdes
 * @property float $pordes
 * @property float $imppib
 * @property float $porpib
 * @property date $fechent
 * @property float $impiva
 * @property float $totpes
 * @property integer $codcpag
 * @property integer $usostk
 * @property string $docref
 * 
 * @method integer  getNroped()   Returns the current record's "nroped" value
 * @method integer  getCodent()   Returns the current record's "codent" value
 * @method date     getFecha()    Returns the current record's "fecha" value
 * @method time     getHora()     Returns the current record's "hora" value
 * @method float    getImpsub()   Returns the current record's "impsub" value
 * @method float    getImptot()   Returns the current record's "imptot" value
 * @method integer  getEstado()   Returns the current record's "estado" value
 * @method integer  getRetcli()   Returns the current record's "retcli" value
 * @method integer  getLugent()   Returns the current record's "lugent" value
 * @method integer  getTipoped()  Returns the current record's "tipoped" value
 * @method integer  getTipopago() Returns the current record's "tipopago" value
 * @method integer  getCoddes()   Returns the current record's "coddes" value
 * @method string   getObserv()   Returns the current record's "observ" value
 * @method integer  getCodage()   Returns the current record's "codage" value
 * @method integer  getFavorito() Returns the current record's "favorito" value
 * @method integer  getCodemp()   Returns the current record's "codemp" value
 * @method integer  getCodcom()   Returns the current record's "codcom" value
 * @method integer  getCodtal()   Returns the current record's "codtal" value
 * @method integer  getNumero()   Returns the current record's "numero" value
 * @method float    getImpdes()   Returns the current record's "impdes" value
 * @method float    getPordes()   Returns the current record's "pordes" value
 * @method float    getImppib()   Returns the current record's "imppib" value
 * @method float    getPorpib()   Returns the current record's "porpib" value
 * @method date     getFechent()  Returns the current record's "fechent" value
 * @method float    getImpiva()   Returns the current record's "impiva" value
 * @method float    getTotpes()   Returns the current record's "totpes" value
 * @method integer  getCodcpag()  Returns the current record's "codcpag" value
 * @method integer  getUsostk()   Returns the current record's "usostk" value
 * @method string   getDocref()   Returns the current record's "docref" value
 * @method Chistrem setNroped()   Sets the current record's "nroped" value
 * @method Chistrem setCodent()   Sets the current record's "codent" value
 * @method Chistrem setFecha()    Sets the current record's "fecha" value
 * @method Chistrem setHora()     Sets the current record's "hora" value
 * @method Chistrem setImpsub()   Sets the current record's "impsub" value
 * @method Chistrem setImptot()   Sets the current record's "imptot" value
 * @method Chistrem setEstado()   Sets the current record's "estado" value
 * @method Chistrem setRetcli()   Sets the current record's "retcli" value
 * @method Chistrem setLugent()   Sets the current record's "lugent" value
 * @method Chistrem setTipoped()  Sets the current record's "tipoped" value
 * @method Chistrem setTipopago() Sets the current record's "tipopago" value
 * @method Chistrem setCoddes()   Sets the current record's "coddes" value
 * @method Chistrem setObserv()   Sets the current record's "observ" value
 * @method Chistrem setCodage()   Sets the current record's "codage" value
 * @method Chistrem setFavorito() Sets the current record's "favorito" value
 * @method Chistrem setCodemp()   Sets the current record's "codemp" value
 * @method Chistrem setCodcom()   Sets the current record's "codcom" value
 * @method Chistrem setCodtal()   Sets the current record's "codtal" value
 * @method Chistrem setNumero()   Sets the current record's "numero" value
 * @method Chistrem setImpdes()   Sets the current record's "impdes" value
 * @method Chistrem setPordes()   Sets the current record's "pordes" value
 * @method Chistrem setImppib()   Sets the current record's "imppib" value
 * @method Chistrem setPorpib()   Sets the current record's "porpib" value
 * @method Chistrem setFechent()  Sets the current record's "fechent" value
 * @method Chistrem setImpiva()   Sets the current record's "impiva" value
 * @method Chistrem setTotpes()   Sets the current record's "totpes" value
 * @method Chistrem setCodcpag()  Sets the current record's "codcpag" value
 * @method Chistrem setUsostk()   Sets the current record's "usostk" value
 * @method Chistrem setDocref()   Sets the current record's "docref" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseChistrem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('chistrem');
        $this->hasColumn('nroped', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('codent', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('hora', 'time', 25, array(
             'type' => 'time',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('impsub', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('imptot', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('estado', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('retcli', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('lugent', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('tipoped', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('tipopago', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('coddes', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('observ', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '.',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 500,
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
        $this->hasColumn('favorito', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('codemp', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('codcom', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('codtal', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('numero', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('impdes', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('pordes', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('imppib', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('porpib', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('fechent', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('impiva', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('totpes', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('codcpag', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('usostk', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('docref', 'string', 50, array(
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
        
    }
}