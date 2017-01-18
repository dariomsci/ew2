<?php

/**
 * Lugdes form base class.
 *
 * @method Lugdes getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLugdesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'coddes' => new sfWidgetFormInputHidden(),
      'descri' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'coddes' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('coddes')), 'empty_value' => $this->getObject()->get('coddes'), 'required' => false)),
      'descri' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lugdes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lugdes';
  }

}
