<?php

/**
 * Entidad form base class.
 *
 * @method Entidad getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEntidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_id' => new sfWidgetFormInputHidden(),
      'razsoc'    => new sfWidgetFormInputText(),
      'cuit'      => new sfWidgetFormInputText(),
      'codvend'   => new sfWidgetFormInputText(),
      'direccion' => new sfWidgetFormInputText(),
      'mail'      => new sfWidgetFormInputText(),
      'telefono'  => new sfWidgetFormInputText(),
      'esprov'    => new sfWidgetFormInputText(),
      'esclie'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo_id')), 'empty_value' => $this->getObject()->get('codigo_id'), 'required' => false)),
      'razsoc'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cuit'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'codvend'   => new sfValidatorInteger(array('required' => false)),
      'direccion' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mail'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telefono'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'esprov'    => new sfValidatorInteger(array('required' => false)),
      'esclie'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entidad';
  }

}
