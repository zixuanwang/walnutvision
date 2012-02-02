<?php

/**
 * Friendship form base class.
 *
 * @method Friendship getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFriendshipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id1' => new sfWidgetFormInputHidden(),
      'id2' => new sfWidgetFormInputHidden(),
      'hop' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id1' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id1')), 'empty_value' => $this->getObject()->get('id1'), 'required' => false)),
      'id2' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id2')), 'empty_value' => $this->getObject()->get('id2'), 'required' => false)),
      'hop' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('friendship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Friendship';
  }

}
