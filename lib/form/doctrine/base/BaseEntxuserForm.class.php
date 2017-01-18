<?php

/**
 * Entxuser form base class.
 *
 * @method Entxuser getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEntxuserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuarios_id' => new sfWidgetFormInputText(),
      'entidad_id'  => new sfWidgetFormInputText(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'usuarios_id' => new sfValidatorInteger(array('required' => false)),
      'entidad_id'  => new sfValidatorInteger(array('required' => false)),
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entxuser[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entxuser';
  }

}
