<?php

/**
 * Subfstk form base class.
 *
 * @method Subfstk getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubfstkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codfam' => new sfWidgetFormInputHidden(),
      'codsfa' => new sfWidgetFormInputHidden(),
      'descri' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codfam' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codfam')), 'empty_value' => $this->getObject()->get('codfam'), 'required' => false)),
      'codsfa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codsfa')), 'empty_value' => $this->getObject()->get('codsfa'), 'required' => false)),
      'descri' => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('subfstk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subfstk';
  }

}
