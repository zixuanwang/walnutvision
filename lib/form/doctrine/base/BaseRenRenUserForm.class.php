<?php

/**
 * RenRenUser form base class.
 *
 * @method RenRenUser getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRenRenUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormTextarea(),
      'sex'              => new sfWidgetFormTextarea(),
      'networkname'      => new sfWidgetFormTextarea(),
      'friendscount'     => new sfWidgetFormInputText(),
      'birthyear'        => new sfWidgetFormInputText(),
      'birthmonth'       => new sfWidgetFormInputText(),
      'birthday'         => new sfWidgetFormInputText(),
      'headurl'          => new sfWidgetFormTextarea(),
      'hometownprovince' => new sfWidgetFormTextarea(),
      'hometowncity'     => new sfWidgetFormTextarea(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'             => new sfValidatorString(),
      'sex'              => new sfValidatorString(array('required' => false)),
      'networkname'      => new sfValidatorString(array('required' => false)),
      'friendscount'     => new sfValidatorInteger(array('required' => false)),
      'birthyear'        => new sfValidatorInteger(array('required' => false)),
      'birthmonth'       => new sfValidatorInteger(array('required' => false)),
      'birthday'         => new sfValidatorInteger(array('required' => false)),
      'headurl'          => new sfValidatorString(array('required' => false)),
      'hometownprovince' => new sfValidatorString(array('required' => false)),
      'hometowncity'     => new sfValidatorString(array('required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
    ));

    $this->widgetSchema->setNameFormat('ren_ren_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RenRenUser';
  }

}
