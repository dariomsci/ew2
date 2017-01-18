<?php

/**
 * Loguser form base class.
 *
 * @method Loguser getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLoguserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormTime(),
      'ip'         => new sfWidgetFormInputText(),
      'accion'     => new sfWidgetFormInputText(),
      'usuario_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorTime(array('required' => false)),
      'ip'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'accion'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'usuario_id' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('loguser[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Loguser';
  }

}
