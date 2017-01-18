<?php

/**
 * Mailxent form base class.
 *
 * @method Mailxent getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMailxentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codent' => new sfWidgetFormInputHidden(),
      'nroren' => new sfWidgetFormInputHidden(),
      'nombre' => new sfWidgetFormInputText(),
      'email'  => new sfWidgetFormInputText(),
      'nrocel' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codent' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codent')), 'empty_value' => $this->getObject()->get('codent'), 'required' => false)),
      'nroren' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nroren')), 'empty_value' => $this->getObject()->get('nroren'), 'required' => false)),
      'nombre' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'email'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'nrocel' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mailxent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mailxent';
  }

}
