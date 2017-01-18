<?php

/**
 * Marcstk form base class.
 *
 * @method Marcstk getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMarcstkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codmar' => new sfWidgetFormInputHidden(),
      'desmar' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codmar' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codmar')), 'empty_value' => $this->getObject()->get('codmar'), 'required' => false)),
      'desmar' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('marcstk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Marcstk';
  }

}
