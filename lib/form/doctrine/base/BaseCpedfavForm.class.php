<?php

/**
 * Cpedfav form base class.
 *
 * @method Cpedfav getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCpedfavForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nropedfav' => new sfWidgetFormInputHidden(),
      'codent'    => new sfWidgetFormInputText(),
      'fecha'     => new sfWidgetFormDate(),
      'hora'      => new sfWidgetFormTime(),
      'impsub'    => new sfWidgetFormInputText(),
      'imptot'    => new sfWidgetFormInputText(),
      'estado'    => new sfWidgetFormInputText(),
      'retcli'    => new sfWidgetFormInputText(),
      'lugent'    => new sfWidgetFormInputText(),
      'tipoped'   => new sfWidgetFormInputText(),
      'tipopago'  => new sfWidgetFormInputText(),
      'coddes'    => new sfWidgetFormInputText(),
      'observ'    => new sfWidgetFormTextarea(),
      'codage'    => new sfWidgetFormInputText(),
      'favorito'  => new sfWidgetFormInputText(),
      'codemp'    => new sfWidgetFormInputText(),
      'codcom'    => new sfWidgetFormInputText(),
      'codtal'    => new sfWidgetFormInputText(),
      'numero'    => new sfWidgetFormInputText(),
      'impdes'    => new sfWidgetFormInputText(),
      'pordes'    => new sfWidgetFormInputText(),
      'imppib'    => new sfWidgetFormInputText(),
      'porpib'    => new sfWidgetFormInputText(),
      'fechent'   => new sfWidgetFormDate(),
      'impiva'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nropedfav' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nropedfav')), 'empty_value' => $this->getObject()->get('nropedfav'), 'required' => false)),
      'codent'    => new sfValidatorInteger(),
      'fecha'     => new sfValidatorDate(),
      'hora'      => new sfValidatorTime(),
      'impsub'    => new sfValidatorNumber(),
      'imptot'    => new sfValidatorNumber(),
      'estado'    => new sfValidatorInteger(),
      'retcli'    => new sfValidatorInteger(array('required' => false)),
      'lugent'    => new sfValidatorInteger(array('required' => false)),
      'tipoped'   => new sfValidatorInteger(array('required' => false)),
      'tipopago'  => new sfValidatorInteger(array('required' => false)),
      'coddes'    => new sfValidatorInteger(array('required' => false)),
      'observ'    => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'codage'    => new sfValidatorInteger(array('required' => false)),
      'favorito'  => new sfValidatorInteger(array('required' => false)),
      'codemp'    => new sfValidatorInteger(array('required' => false)),
      'codcom'    => new sfValidatorInteger(array('required' => false)),
      'codtal'    => new sfValidatorInteger(array('required' => false)),
      'numero'    => new sfValidatorInteger(array('required' => false)),
      'impdes'    => new sfValidatorNumber(array('required' => false)),
      'pordes'    => new sfValidatorNumber(array('required' => false)),
      'imppib'    => new sfValidatorNumber(array('required' => false)),
      'porpib'    => new sfValidatorNumber(array('required' => false)),
      'fechent'   => new sfValidatorDate(array('required' => false)),
      'impiva'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cpedfav[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cpedfav';
  }

}
