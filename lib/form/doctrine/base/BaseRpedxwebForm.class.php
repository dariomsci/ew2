<?php

/**
 * Rpedxweb form base class.
 *
 * @method Rpedxweb getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRpedxwebForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nroped'   => new sfWidgetFormInputHidden(),
      'nroren'   => new sfWidgetFormInputHidden(),
      'codent'   => new sfWidgetFormInputText(),
      'fecha'    => new sfWidgetFormDate(),
      'codart'   => new sfWidgetFormInputText(),
      'valatr1'  => new sfWidgetFormInputText(),
      'valatr2'  => new sfWidgetFormInputText(),
      'valatr3'  => new sfWidgetFormInputText(),
      'valatr4'  => new sfWidgetFormInputText(),
      'cantidad' => new sfWidgetFormInputText(),
      'precio'   => new sfWidgetFormInputText(),
      'porcbon'  => new sfWidgetFormInputText(),
      'impsub'   => new sfWidgetFormInputText(),
      'canpes'   => new sfWidgetFormInputText(),
      'codage'   => new sfWidgetFormInputText(),
      'canxenv'  => new sfWidgetFormInputText(),
      'cantpal'  => new sfWidgetFormInputText(),
      'pbonif1'  => new sfWidgetFormInputText(),
      'pbonif2'  => new sfWidgetFormInputText(),
      'precbon'  => new sfWidgetFormInputText(),
      'fecent'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'nroped'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nroped')), 'empty_value' => $this->getObject()->get('nroped'), 'required' => false)),
      'nroren'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nroren')), 'empty_value' => $this->getObject()->get('nroren'), 'required' => false)),
      'codent'   => new sfValidatorInteger(),
      'fecha'    => new sfValidatorDate(),
      'codart'   => new sfValidatorNumber(),
      'valatr1'  => new sfValidatorInteger(array('required' => false)),
      'valatr2'  => new sfValidatorInteger(array('required' => false)),
      'valatr3'  => new sfValidatorInteger(array('required' => false)),
      'valatr4'  => new sfValidatorInteger(array('required' => false)),
      'cantidad' => new sfValidatorNumber(),
      'precio'   => new sfValidatorNumber(),
      'porcbon'  => new sfValidatorNumber(),
      'impsub'   => new sfValidatorNumber(),
      'canpes'   => new sfValidatorInteger(array('required' => false)),
      'codage'   => new sfValidatorInteger(array('required' => false)),
      'canxenv'  => new sfValidatorInteger(array('required' => false)),
      'cantpal'  => new sfValidatorInteger(array('required' => false)),
      'pbonif1'  => new sfValidatorNumber(array('required' => false)),
      'pbonif2'  => new sfValidatorNumber(array('required' => false)),
      'precbon'  => new sfValidatorNumber(array('required' => false)),
      'fecent'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rpedxweb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rpedxweb';
  }

}
