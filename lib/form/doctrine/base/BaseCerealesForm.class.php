<?php

/**
 * Cereales form base class.
 *
 * @method Cereales getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCerealesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cereal_id' => new sfWidgetFormInputHidden(),
      'descer'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cereal_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cereal_id')), 'empty_value' => $this->getObject()->get('cereal_id'), 'required' => false)),
      'descer'    => new sfValidatorString(array('max_length' => 13, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cereales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cereales';
  }

}
