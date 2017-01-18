<?php

/**
 * Tipopedi form base class.
 *
 * @method Tipopedi getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipopediForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo' => new sfWidgetFormInputHidden(),
      'descri' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'descri' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipopedi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipopedi';
  }

}
