<?php

/**
 * Novcoinf form base class.
 *
 * @method Novcoinf getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNovcoinfForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'tipo'     => new sfWidgetFormInputText(),
      'leecli'   => new sfWidgetFormInputText(),
      'leepro'   => new sfWidgetFormInputText(),
      'dfecha'   => new sfWidgetFormDate(),
      'hfecha'   => new sfWidgetFormDate(),
      'estado'   => new sfWidgetFormInputText(),
      'titulo'   => new sfWidgetFormInputText(),
      'resumen'  => new sfWidgetFormInputText(),
      'detalle'  => new sfWidgetFormTextarea(),
      'imagen'   => new sfWidgetFormInputText(),
      'archivo'  => new sfWidgetFormInputText(),
      'nbreimg'  => new sfWidgetFormInputText(),
      'nbrearch' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo'     => new sfValidatorInteger(array('required' => false)),
      'leecli'   => new sfValidatorInteger(array('required' => false)),
      'leepro'   => new sfValidatorInteger(array('required' => false)),
      'dfecha'   => new sfValidatorDate(array('required' => false)),
      'hfecha'   => new sfValidatorDate(array('required' => false)),
      'estado'   => new sfValidatorInteger(array('required' => false)),
      'titulo'   => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'resumen'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'detalle'  => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'imagen'   => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'archivo'  => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'nbreimg'  => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'nbrearch' => new sfValidatorString(array('max_length' => 55, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('novcoinf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Novcoinf';
  }

}
