<?php

/**
 * RenRenUser filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRenRenUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sex'              => new sfWidgetFormFilterInput(),
      'networkname'      => new sfWidgetFormFilterInput(),
      'friendscount'     => new sfWidgetFormFilterInput(),
      'birthyear'        => new sfWidgetFormFilterInput(),
      'birthmonth'       => new sfWidgetFormFilterInput(),
      'birthday'         => new sfWidgetFormFilterInput(),
      'headurl'          => new sfWidgetFormFilterInput(),
      'hometownprovince' => new sfWidgetFormFilterInput(),
      'hometowncity'     => new sfWidgetFormFilterInput(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'             => new sfValidatorPass(array('required' => false)),
      'sex'              => new sfValidatorPass(array('required' => false)),
      'networkname'      => new sfValidatorPass(array('required' => false)),
      'friendscount'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'birthyear'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'birthmonth'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'birthday'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'headurl'          => new sfValidatorPass(array('required' => false)),
      'hometownprovince' => new sfValidatorPass(array('required' => false)),
      'hometowncity'     => new sfValidatorPass(array('required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('ren_ren_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RenRenUser';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'name'             => 'Text',
      'sex'              => 'Text',
      'networkname'      => 'Text',
      'friendscount'     => 'Number',
      'birthyear'        => 'Number',
      'birthmonth'       => 'Number',
      'birthday'         => 'Number',
      'headurl'          => 'Text',
      'hometownprovince' => 'Text',
      'hometowncity'     => 'Text',
      'user_id'          => 'ForeignKey',
    );
  }
}
