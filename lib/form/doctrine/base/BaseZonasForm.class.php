<?php

/**
 * Zonas form base class.
 *
 * @method Zonas getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseZonasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'      => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormInputText(),
      'mail'        => new sfWidgetFormInputText(),
      'telefono'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 50)),
      'mail'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telefono'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zonas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zonas';
  }

}
