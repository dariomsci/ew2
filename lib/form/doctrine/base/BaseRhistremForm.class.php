<?php

/**
 * Rhistrem form base class.
 *
 * @method Rhistrem getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRhistremForm extends BaseFormDoctrine
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
      'codemp'   => new sfWidgetFormInputHidden(),
      'codcom'   => new sfWidgetFormInputHidden(),
      'codtal'   => new sfWidgetFormInputHidden(),
      'numero'   => new sfWidgetFormInputHidden(),
      'fecent'   => new sfWidgetFormDate(),
      'lugent'   => new sfWidgetFormInputText(),
      'coddes'   => new sfWidgetFormInputText(),
      'codfam'   => new sfWidgetFormInputText(),
      'codsfa'   => new sfWidgetFormInputText(),
      'cantcan'  => new sfWidgetFormInputText(),
      'cantapl'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nroped'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nroped')), 'empty_value' => $this->getObject()->get('nroped'), 'required' => false)),
      'nroren'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nroren')), 'empty_value' => $this->getObject()->get('nroren'), 'required' => false)),
      'codent'   => new sfValidatorInteger(array('required' => false)),
      'fecha'    => new sfValidatorDate(array('required' => false)),
      'codart'   => new sfValidatorNumber(array('required' => false)),
      'valatr1'  => new sfValidatorInteger(array('required' => false)),
      'valatr2'  => new sfValidatorInteger(array('required' => false)),
      'valatr3'  => new sfValidatorInteger(array('required' => false)),
      'valatr4'  => new sfValidatorInteger(array('required' => false)),
      'cantidad' => new sfValidatorNumber(array('required' => false)),
      'precio'   => new sfValidatorNumber(array('required' => false)),
      'porcbon'  => new sfValidatorNumber(array('required' => false)),
      'impsub'   => new sfValidatorNumber(array('required' => false)),
      'canpes'   => new sfValidatorNumber(array('required' => false)),
      'codage'   => new sfValidatorInteger(array('required' => false)),
      'canxenv'  => new sfValidatorInteger(array('required' => false)),
      'cantpal'  => new sfValidatorInteger(array('required' => false)),
      'pbonif1'  => new sfValidatorNumber(array('required' => false)),
      'pbonif2'  => new sfValidatorNumber(array('required' => false)),
      'precbon'  => new sfValidatorNumber(array('required' => false)),
      'codemp'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codemp')), 'empty_value' => $this->getObject()->get('codemp'), 'required' => false)),
      'codcom'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codcom')), 'empty_value' => $this->getObject()->get('codcom'), 'required' => false)),
      'codtal'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codtal')), 'empty_value' => $this->getObject()->get('codtal'), 'required' => false)),
      'numero'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('numero')), 'empty_value' => $this->getObject()->get('numero'), 'required' => false)),
      'fecent'   => new sfValidatorDate(array('required' => false)),
      'lugent'   => new sfValidatorInteger(array('required' => false)),
      'coddes'   => new sfValidatorInteger(array('required' => false)),
      'codfam'   => new sfValidatorInteger(array('required' => false)),
      'codsfa'   => new sfValidatorInteger(array('required' => false)),
      'cantcan'  => new sfValidatorNumber(array('required' => false)),
      'cantapl'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rhistrem[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rhistrem';
  }

}
