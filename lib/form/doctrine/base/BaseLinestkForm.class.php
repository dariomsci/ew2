<?php

/**
 * Linestk form base class.
 *
 * @method Linestk getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinestkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codlin' => new sfWidgetFormInputHidden(),
      'deslin' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codlin' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codlin')), 'empty_value' => $this->getObject()->get('codlin'), 'required' => false)),
      'deslin' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('linestk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Linestk';
  }

}
