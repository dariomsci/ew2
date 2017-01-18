<?php

/**
 * Entresum form base class.
 *
 * @method Entresum getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEntresumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo' => new sfWidgetFormInputHidden(),
      'codres' => new sfWidgetFormInputHidden(),
      'razsoc' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'codres' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codres')), 'empty_value' => $this->getObject()->get('codres'), 'required' => false)),
      'razsoc' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entresum[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entresum';
  }

}
