<?php

/**
 * User filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'                    => new sfWidgetFormFilterInput(),
      'password'                    => new sfWidgetFormFilterInput(),
      'usertype'                    => new sfWidgetFormFilterInput(),
      'realname'                    => new sfWidgetFormFilterInput(),
      'sex'                         => new sfWidgetFormFilterInput(),
      'age'                         => new sfWidgetFormFilterInput(),
      'headurl'                     => new sfWidgetFormFilterInput(),
      'lastlogin'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'product_upload_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
      'product_recommendation_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
    ));

    $this->setValidators(array(
      'username'                    => new sfValidatorPass(array('required' => false)),
      'password'                    => new sfValidatorPass(array('required' => false)),
      'usertype'                    => new sfValidatorPass(array('required' => false)),
      'realname'                    => new sfValidatorPass(array('required' => false)),
      'sex'                         => new sfValidatorPass(array('required' => false)),
      'age'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'headurl'                     => new sfValidatorPass(array('required' => false)),
      'lastlogin'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'product_upload_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
      'product_recommendation_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addProductUploadListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.UserProductUploadLink UserProductUploadLink')
      ->andWhereIn('UserProductUploadLink.product_id', $values)
    ;
  }

  public function addProductRecommendationListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.UserProductRecommendationLink UserProductRecommendationLink')
      ->andWhereIn('UserProductRecommendationLink.product_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'username'                    => 'Text',
      'password'                    => 'Text',
      'usertype'                    => 'Text',
      'realname'                    => 'Text',
      'sex'                         => 'Text',
      'age'                         => 'Number',
      'headurl'                     => 'Text',
      'lastlogin'                   => 'Date',
      'created_at'                  => 'Date',
      'updated_at'                  => 'Date',
      'product_upload_list'         => 'ManyKey',
      'product_recommendation_list' => 'ManyKey',
    );
  }
}
