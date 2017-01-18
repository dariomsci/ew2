<?php

/**
 * Famistk form base class.
 *
 * @method Famistk getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFamistkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codfam' => new sfWidgetFormInputHidden(),
      'descri' => new sfWidgetFormInputText(),
      'codage' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codfam' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codfam')), 'empty_value' => $this->getObject()->get('codfam'), 'required' => false)),
      'descri' => new sfValidatorString(array('max_length' => 50)),
      'codage' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('famistk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Famistk';
  }

}
