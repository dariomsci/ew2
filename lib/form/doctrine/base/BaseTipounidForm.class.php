<?php

/**
 * Tipounid form base class.
 *
 * @method Tipounid getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipounidForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'coduni' => new sfWidgetFormInputHidden(),
      'desuni' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'coduni' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('coduni')), 'empty_value' => $this->getObject()->get('coduni'), 'required' => false)),
      'desuni' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipounid[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipounid';
  }

}
