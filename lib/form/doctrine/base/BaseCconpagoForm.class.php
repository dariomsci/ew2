<?php

/**
 * Cconpago form base class.
 *
 * @method Cconpago getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCconpagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codcpag' => new sfWidgetFormInputHidden(),
      'descpag' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codcpag' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codcpag')), 'empty_value' => $this->getObject()->get('codcpag'), 'required' => false)),
      'descpag' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cconpago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cconpago';
  }

}
