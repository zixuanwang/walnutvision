<?php

/**
 * Store filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStoreFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitude'      => new sfWidgetFormFilterInput(),
      'latitude'       => new sfWidgetFormFilterInput(),
      'address'        => new sfWidgetFormFilterInput(),
      'rating'         => new sfWidgetFormFilterInput(),
      'operatetime'    => new sfWidgetFormFilterInput(),
      'contactphone'   => new sfWidgetFormFilterInput(),
      'contactemail'   => new sfWidgetFormFilterInput(),
      'contactwebsite' => new sfWidgetFormFilterInput(),
      'parking'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'longitude'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'latitude'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'address'        => new sfValidatorPass(array('required' => false)),
      'rating'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'operatetime'    => new sfValidatorPass(array('required' => false)),
      'contactphone'   => new sfValidatorPass(array('required' => false)),
      'contactemail'   => new sfValidatorPass(array('required' => false)),
      'contactwebsite' => new sfValidatorPass(array('required' => false)),
      'parking'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('store_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Store';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'longitude'      => 'Number',
      'latitude'       => 'Number',
      'address'        => 'Text',
      'rating'         => 'Number',
      'operatetime'    => 'Text',
      'contactphone'   => 'Text',
      'contactemail'   => 'Text',
      'contactwebsite' => 'Text',
      'parking'        => 'Number',
    );
  }
}
