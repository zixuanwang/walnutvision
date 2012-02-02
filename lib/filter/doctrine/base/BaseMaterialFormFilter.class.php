<?php

/**
 * Material filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMaterialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'materialname' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'product_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
    ));

    $this->setValidators(array(
      'materialname' => new sfValidatorPass(array('required' => false)),
      'product_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('material_filters[%s]');

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
      ->leftJoin($query->getRootAlias().'.ProductMaterialLink ProductMaterialLink')
      ->andWhereIn('ProductMaterialLink.product_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Material';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'materialname' => 'Text',
      'product_list' => 'ManyKey',
    );
  }
}
