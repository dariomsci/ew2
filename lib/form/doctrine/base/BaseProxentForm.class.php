<?php

/**
 * Proxent form base class.
 *
 * @method Proxent getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProxentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codent'  => new sfWidgetFormInputHidden(),
      'codart'  => new sfWidgetFormInputHidden(),
      'pbonif1' => new sfWidgetFormInputText(),
      'pbonif2' => new sfWidgetFormInputText(),
      'precio'  => new sfWidgetFormInputText(),
      'prebon'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codent'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codent')), 'empty_value' => $this->getObject()->get('codent'), 'required' => false)),
      'codart'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codart')), 'empty_value' => $this->getObject()->get('codart'), 'required' => false)),
      'pbonif1' => new sfValidatorNumber(array('required' => false)),
      'pbonif2' => new sfValidatorNumber(array('required' => false)),
      'precio'  => new sfValidatorNumber(array('required' => false)),
      'prebon'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proxent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proxent';
  }

}
