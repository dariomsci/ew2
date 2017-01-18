<?php

/**
 * Defecto form base class.
 *
 * @method Defecto getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDefectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_defecto' => new sfWidgetFormInputHidden(),
      'id_tipo'    => new sfWidgetFormInputText(),
      'descri'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_defecto' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_defecto')), 'empty_value' => $this->getObject()->get('id_defecto'), 'required' => false)),
      'id_tipo'    => new sfValidatorInteger(),
      'descri'     => new sfValidatorString(array('max_length' => 80)),
    ));

    $this->widgetSchema->setNameFormat('defecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Defecto';
  }

}
