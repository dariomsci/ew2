<?php

/**
 * Cosechas form base class.
 *
 * @method Cosechas getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCosechasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cosecha_id' => new sfWidgetFormInputHidden(),
      'descos'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cosecha_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cosecha_id')), 'empty_value' => $this->getObject()->get('cosecha_id'), 'required' => false)),
      'descos'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cosechas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cosechas';
  }

}
