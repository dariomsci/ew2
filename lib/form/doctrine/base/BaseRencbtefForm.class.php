<?php

/**
 * Rencbtef form base class.
 *
 * @method Rencbtef getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRencbtefForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'codemp'  => new sfWidgetFormInputText(),
      'codcom'  => new sfWidgetFormInputText(),
      'codtal'  => new sfWidgetFormInputText(),
      'numero'  => new sfWidgetFormInputText(),
      'nroren'  => new sfWidgetFormInputText(),
      'codigo'  => new sfWidgetFormInputText(),
      'codres'  => new sfWidgetFormInputText(),
      'fecha'   => new sfWidgetFormDate(),
      'hora'    => new sfWidgetFormInputText(),
      'descom'  => new sfWidgetFormInputText(),
      'letra'   => new sfWidgetFormInputText(),
      'torig'   => new sfWidgetFormInputText(),
      'norig'   => new sfWidgetFormInputText(),
      'forig'   => new sfWidgetFormDate(),
      'importe' => new sfWidgetFormInputText(),
      'detalle' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codemp'  => new sfValidatorInteger(array('required' => false)),
      'codcom'  => new sfValidatorInteger(array('required' => false)),
      'codtal'  => new sfValidatorInteger(array('required' => false)),
      'numero'  => new sfValidatorInteger(array('required' => false)),
      'nroren'  => new sfValidatorInteger(array('required' => false)),
      'codigo'  => new sfValidatorInteger(array('required' => false)),
      'codres'  => new sfValidatorNumber(array('required' => false)),
      'fecha'   => new sfValidatorDate(),
      'hora'    => new sfValidatorString(array('max_length' => 6)),
      'descom'  => new sfValidatorString(array('max_length' => 10)),
      'letra'   => new sfValidatorString(array('max_length' => 1)),
      'torig'   => new sfValidatorString(array('max_length' => 4)),
      'norig'   => new sfValidatorString(array('max_length' => 8)),
      'forig'   => new sfValidatorDate(),
      'importe' => new sfValidatorNumber(),
      'detalle' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('rencbtef[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rencbtef';
  }

}
