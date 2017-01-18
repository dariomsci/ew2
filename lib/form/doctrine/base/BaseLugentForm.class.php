<?php

/**
 * Lugent form base class.
 *
 * @method Lugent getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLugentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'      => new sfWidgetFormInputHidden(),
      'codlug'      => new sfWidgetFormInputHidden(),
      'descri'      => new sfWidgetFormTextarea(),
      'longitud'    => new sfWidgetFormInputText(),
      'latitud'     => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codigo'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'codlug'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codlug')), 'empty_value' => $this->getObject()->get('codlug'), 'required' => false)),
      'descri'      => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'longitud'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'latitud'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'observacion' => new sfValidatorString(array('max_length' => 300, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lugent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lugent';
  }

}
