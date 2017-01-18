<?php

/**
 * Tpedxent form base class.
 *
 * @method Tpedxent getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTpedxentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codped' => new sfWidgetFormInputHidden(),
      'codent' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codped' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codped')), 'empty_value' => $this->getObject()->get('codped'), 'required' => false)),
      'codent' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codent')), 'empty_value' => $this->getObject()->get('codent'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tpedxent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tpedxent';
  }

}
