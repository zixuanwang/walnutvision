<?php

/**
 * Category filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'level'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'product_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
      'category_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Category')),
      'subcategories_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Category')),
    ));

    $this->setValidators(array(
      'level'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'        => new sfValidatorPass(array('required' => false)),
      'product_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
      'category_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Category', 'required' => false)),
      'subcategories_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Category', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addProductListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('ProductCategoryLink.product_id', $values)
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
      ->leftJoin($query->getRootAlias().'.CategoryTree CategoryTree')
      ->andWhereIn('CategoryTree.category_id', $values)
    ;
  }

  public function addSubcategoriesListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.CategoryTree CategoryTree')
      ->andWhereIn('CategoryTree.subcategory_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Category';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'level'              => 'Number',
      'description'        => 'Text',
      'product_list'       => 'ManyKey',
      'category_list'      => 'ManyKey',
      'subcategories_list' => 'ManyKey',
    );
  }
}
