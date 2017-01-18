<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuarios_id' => new sfWidgetFormInputHidden(),
      'webuser'     => new sfWidgetFormInputText(),
      'webpwd'      => new sfWidgetFormInputText(),
      'codvend'     => new sfWidgetFormInputText(),
      'admin'       => new sfWidgetFormInputText(),
      'nombre'      => new sfWidgetFormInputText(),
      'mail'        => new sfWidgetFormInputText(),
      'codzona'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'usuarios_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuarios_id')), 'empty_value' => $this->getObject()->get('usuarios_id'), 'required' => false)),
      'webuser'     => new sfValidatorString(array('max_length' => 64)),
      'webpwd'      => new sfValidatorString(array('max_length' => 64)),
      'codvend'     => new sfValidatorInteger(array('required' => false)),
      'admin'       => new sfValidatorInteger(array('required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'mail'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codzona'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}
