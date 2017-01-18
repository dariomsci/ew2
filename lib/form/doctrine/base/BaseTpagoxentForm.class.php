<?php

/**
 * Tpagoxent form base class.
 *
 * @method Tpagoxent getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTpagoxentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codpag' => new sfWidgetFormInputHidden(),
      'codent' => new sfWidgetFormInputHidden(),
      'codage' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codpag' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codpag')), 'empty_value' => $this->getObject()->get('codpag'), 'required' => false)),
      'codent' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codent')), 'empty_value' => $this->getObject()->get('codent'), 'required' => false)),
      'codage' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codage')), 'empty_value' => $this->getObject()->get('codage'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tpagoxent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tpagoxent';
  }

}
