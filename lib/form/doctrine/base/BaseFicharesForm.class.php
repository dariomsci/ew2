<?php

/**
 * Fichares form base class.
 *
 * @method Fichares getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFicharesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'codemp'  => new sfWidgetFormInputText(),
      'codigo'  => new sfWidgetFormInputText(),
      'codres'  => new sfWidgetFormInputText(),
      'cosecha' => new sfWidgetFormInputText(),
      'cereal'  => new sfWidgetFormInputText(),
      'kilos1'  => new sfWidgetFormInputText(),
      'kilos2'  => new sfWidgetFormInputText(),
      'kilos3'  => new sfWidgetFormInputText(),
      'kilos4'  => new sfWidgetFormInputText(),
      'kilos5'  => new sfWidgetFormInputText(),
      'kilos6'  => new sfWidgetFormInputText(),
      'kilos7'  => new sfWidgetFormInputText(),
      'kilstk'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codemp'  => new sfValidatorInteger(array('required' => false)),
      'codigo'  => new sfValidatorInteger(array('required' => false)),
      'codres'  => new sfValidatorInteger(array('required' => false)),
      'cosecha' => new sfValidatorInteger(array('required' => false)),
      'cereal'  => new sfValidatorInteger(array('required' => false)),
      'kilos1'  => new sfValidatorNumber(array('required' => false)),
      'kilos2'  => new sfValidatorNumber(array('required' => false)),
      'kilos3'  => new sfValidatorNumber(array('required' => false)),
      'kilos4'  => new sfValidatorNumber(array('required' => false)),
      'kilos5'  => new sfValidatorNumber(array('required' => false)),
      'kilos6'  => new sfValidatorNumber(array('required' => false)),
      'kilos7'  => new sfValidatorNumber(array('required' => false)),
      'kilstk'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fichares[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fichares';
  }

}
