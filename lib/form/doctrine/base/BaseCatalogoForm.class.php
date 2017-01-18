<?php

/**
 * Catalogo form base class.
 *
 * @method Catalogo getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCatalogoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codalfa' => new sfWidgetFormInputHidden(),
      'descri'  => new sfWidgetFormTextarea(),
      'codart'  => new sfWidgetFormInputText(),
      'valatr1' => new sfWidgetFormInputText(),
      'valatr2' => new sfWidgetFormInputText(),
      'valatr3' => new sfWidgetFormInputText(),
      'valatr4' => new sfWidgetFormInputText(),
      'codfam'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Famistk'), 'add_empty' => true)),
      'codsfa'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subfstk_3'), 'add_empty' => true)),
      'codrub'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Rubrstk_6'), 'add_empty' => true)),
      'codmar'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Marcstk'), 'add_empty' => true)),
      'codlin'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Linestk'), 'add_empty' => true)),
      'unistk'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipounid'), 'add_empty' => true)),
      'univta'  => new sfWidgetFormInputText(),
      'canstk'  => new sfWidgetFormInputText(),
      'fecrea'  => new sfWidgetFormDate(),
      'canpes'  => new sfWidgetFormInputText(),
      'canxenv' => new sfWidgetFormInputText(),
      'espromo' => new sfWidgetFormInputText(),
      'codage'  => new sfWidgetFormInputText(),
      'alfacor' => new sfWidgetFormInputText(),
      'activo'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codalfa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codalfa')), 'empty_value' => $this->getObject()->get('codalfa'), 'required' => false)),
      'descri'  => new sfValidatorString(array('max_length' => 300)),
      'codart'  => new sfValidatorInteger(),
      'valatr1' => new sfValidatorInteger(array('required' => false)),
      'valatr2' => new sfValidatorInteger(array('required' => false)),
      'valatr3' => new sfValidatorInteger(array('required' => false)),
      'valatr4' => new sfValidatorInteger(array('required' => false)),
      'codfam'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Famistk'), 'required' => false)),
      'codsfa'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Subfstk_3'), 'required' => false)),
      'codrub'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Rubrstk_6'), 'required' => false)),
      'codmar'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Marcstk'), 'required' => false)),
      'codlin'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Linestk'), 'required' => false)),
      'unistk'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipounid'), 'required' => false)),
      'univta'  => new sfValidatorInteger(array('required' => false)),
      'canstk'  => new sfValidatorInteger(array('required' => false)),
      'fecrea'  => new sfValidatorDate(array('required' => false)),
      'canpes'  => new sfValidatorInteger(array('required' => false)),
      'canxenv' => new sfValidatorInteger(array('required' => false)),
      'espromo' => new sfValidatorInteger(array('required' => false)),
      'codage'  => new sfValidatorInteger(array('required' => false)),
      'alfacor' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'activo'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('catalogo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Catalogo';
  }

}
