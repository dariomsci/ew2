<?php

/**
 * Estadorecl form base class.
 *
 * @method Estadorecl getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstadoreclForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_reclamo'  => new sfWidgetFormInputText(),
      'id_estado'   => new sfWidgetFormInputText(),
      'id_tiporecl' => new sfWidgetFormInputText(),
      'respuesta'   => new sfWidgetFormInputText(),
      'fecha'       => new sfWidgetFormDate(),
      'hora'        => new sfWidgetFormTime(),
      'usuario'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_reclamo'  => new sfValidatorInteger(),
      'id_estado'   => new sfValidatorInteger(),
      'id_tiporecl' => new sfValidatorInteger(),
      'respuesta'   => new sfValidatorString(array('max_length' => 200)),
      'fecha'       => new sfValidatorDate(),
      'hora'        => new sfValidatorTime(),
      'usuario'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('estadorecl[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estadorecl';
  }

}
