<?php

/**
 * Uninego form base class.
 *
 * @method Uninego getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUninegoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codage' => new sfWidgetFormInputHidden(),
      'descri' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codage' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codage')), 'empty_value' => $this->getObject()->get('codage'), 'required' => false)),
      'descri' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('uninego[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Uninego';
  }

}
