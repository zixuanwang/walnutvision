<?php

/**
 * Product filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'brand_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Brand'), 'add_empty' => true)),
      'size'                     => new sfWidgetFormFilterInput(),
      'barcode'                  => new sfWidgetFormFilterInput(),
      'qrcode'                   => new sfWidgetFormFilterInput(),
      'description'              => new sfWidgetFormFilterInput(),
      'overallrating'            => new sfWidgetFormFilterInput(),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'color_list'               => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Color')),
      'material_list'            => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Material')),
      'category_list'            => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Category')),
      'user_recommendation_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'User')),
      'user_upload_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'User')),
    ));

    $this->setValidators(array(
      'name'                     => new sfValidatorPass(array('required' => false)),
      'brand_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Brand'), 'column' => 'id')),
      'size'                     => new sfValidatorPass(array('required' => false)),
      'barcode'                  => new sfValidatorPass(array('required' => false)),
      'qrcode'                   => new sfValidatorPass(array('required' => false)),
      'description'              => new sfValidatorPass(array('required' => false)),
      'overallrating'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'color_list'               => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Color', 'required' => false)),
      'material_list'            => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Material', 'required' => false)),
      'category_list'            => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Category', 'required' => false)),
      'user_recommendation_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'User', 'required' => false)),
      'user_upload_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'User', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addColorListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.ProductColorLink ProductColorLink')
      ->andWhereIn('ProductColorLink.color_id', $values)
    ;
  }

  public function addMaterialListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.ProductMaterialLink ProductMaterialLink')
      ->andWhereIn('ProductMaterialLink.material_id', $values)
    ;
  }

  public function addCategoryListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.ProductCategoryLink ProductCategoryLink')
      ->andWhereIn('ProductCategoryLink.category_id', $values)
    ;
  }

  public function addUserRecommendationListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('UserProductRecommendationLink.user_id', $values)
    ;
  }

  public function addUserUploadListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('UserProductUploadLink.user_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'name'                     => 'Text',
      'brand_id'                 => 'ForeignKey',
      'size'                     => 'Text',
      'barcode'                  => 'Text',
      'qrcode'                   => 'Text',
      'description'              => 'Text',
      'overallrating'            => 'Number',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
      'color_list'               => 'ManyKey',
      'material_list'            => 'ManyKey',
      'category_list'            => 'ManyKey',
      'user_recommendation_list' => 'ManyKey',
      'user_upload_list'         => 'ManyKey',
    );
  }
}
