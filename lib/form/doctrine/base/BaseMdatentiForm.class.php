<?php

/**
 * Mdatenti form base class.
 *
 * @method Mdatenti getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMdatentiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_id' => new sfWidgetFormInputHidden(),
      'codvend'   => new sfWidgetFormInputText(),
      'codzona'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo_id')), 'empty_value' => $this->getObject()->get('codigo_id'), 'required' => false)),
      'codvend'   => new sfValidatorInteger(array('required' => false)),
      'codzona'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mdatenti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mdatenti';
  }

}
