<?php

/**
 * Tiporeclamo form base class.
 *
 * @method Tiporeclamo getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiporeclamoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo' => new sfWidgetFormInputHidden(),
      'descri'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tipo')), 'empty_value' => $this->getObject()->get('id_tipo'), 'required' => false)),
      'descri'  => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('tiporeclamo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tiporeclamo';
  }

}
