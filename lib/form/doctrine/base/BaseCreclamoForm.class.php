<?php

/**
 * Creclamo form base class.
 *
 * @method Creclamo getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCreclamoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_reclamo'  => new sfWidgetFormInputHidden(),
      'id_tipo'     => new sfWidgetFormInputText(),
      'id_defecto'  => new sfWidgetFormInputText(),
      'remito'      => new sfWidgetFormInputText(),
      'devuelve'    => new sfWidgetFormInputText(),
      'factura'     => new sfWidgetFormInputText(),
      'transporte'  => new sfWidgetFormInputText(),
      'fecha'       => new sfWidgetFormDate(),
      'hora'        => new sfWidgetFormTime(),
      'codent'      => new sfWidgetFormInputText(),
      'codart'      => new sfWidgetFormInputText(),
      'cantidad'    => new sfWidgetFormInputText(),
      'fecelab'     => new sfWidgetFormInputText(),
      'nromaq'      => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormTextarea(),
      'destino'     => new sfWidgetFormInputText(),
      'medtrans'    => new sfWidgetFormInputText(),
      'usuario'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_reclamo'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_reclamo')), 'empty_value' => $this->getObject()->get('id_reclamo'), 'required' => false)),
      'id_tipo'     => new sfValidatorInteger(),
      'id_defecto'  => new sfValidatorInteger(),
      'remito'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'devuelve'    => new sfValidatorInteger(array('required' => false)),
      'factura'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'transporte'  => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
      'hora'        => new sfValidatorTime(array('required' => false)),
      'codent'      => new sfValidatorInteger(array('required' => false)),
      'codart'      => new sfValidatorInteger(array('required' => false)),
      'cantidad'    => new sfValidatorInteger(array('required' => false)),
      'fecelab'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nromaq'      => new sfValidatorInteger(array('required' => false)),
      'observacion' => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'destino'     => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'medtrans'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'usuario'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('creclamo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Creclamo';
  }

}
