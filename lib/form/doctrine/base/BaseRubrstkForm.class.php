<?php

/**
 * Rubrstk form base class.
 *
 * @method Rubrstk getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRubrstkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codfam' => new sfWidgetFormInputHidden(),
      'codsfa' => new sfWidgetFormInputHidden(),
      'codrub' => new sfWidgetFormInputHidden(),
      'desrub' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codfam' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codfam')), 'empty_value' => $this->getObject()->get('codfam'), 'required' => false)),
      'codsfa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codsfa')), 'empty_value' => $this->getObject()->get('codsfa'), 'required' => false)),
      'codrub' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codrub')), 'empty_value' => $this->getObject()->get('codrub'), 'required' => false)),
      'desrub' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rubrstk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rubrstk';
  }

}
