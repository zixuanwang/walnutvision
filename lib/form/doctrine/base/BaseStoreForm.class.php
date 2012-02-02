<?php

/**
 * Store form base class.
 *
 * @method Store getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStoreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormTextarea(),
      'longitude'      => new sfWidgetFormInputText(),
      'latitude'       => new sfWidgetFormInputText(),
      'address'        => new sfWidgetFormTextarea(),
      'rating'         => new sfWidgetFormInputText(),
      'operatetime'    => new sfWidgetFormTextarea(),
      'contactphone'   => new sfWidgetFormTextarea(),
      'contactemail'   => new sfWidgetFormTextarea(),
      'contactwebsite' => new sfWidgetFormTextarea(),
      'parking'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(),
      'longitude'      => new sfValidatorNumber(array('required' => false)),
      'latitude'       => new sfValidatorNumber(array('required' => false)),
      'address'        => new sfValidatorString(array('required' => false)),
      'rating'         => new sfValidatorNumber(array('required' => false)),
      'operatetime'    => new sfValidatorString(array('required' => false)),
      'contactphone'   => new sfValidatorString(array('required' => false)),
      'contactemail'   => new sfValidatorString(array('required' => false)),
      'contactwebsite' => new sfValidatorString(array('required' => false)),
      'parking'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('store[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Store';
  }

}
