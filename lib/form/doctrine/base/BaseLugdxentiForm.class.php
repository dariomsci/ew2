<?php

/**
 * Lugdxenti form base class.
 *
 * @method Lugdxenti getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLugdxentiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codent' => new sfWidgetFormInputHidden(),
      'coddes' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codent' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codent')), 'empty_value' => $this->getObject()->get('codent'), 'required' => false)),
      'coddes' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('coddes')), 'empty_value' => $this->getObject()->get('coddes'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lugdxenti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lugdxenti';
  }

}
