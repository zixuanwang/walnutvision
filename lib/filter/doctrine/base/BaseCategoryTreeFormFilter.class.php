<?php

/**
 * CategoryTree filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryTreeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'subcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subcategory'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'category_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'subcategory_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subcategory'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('category_tree_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CategoryTree';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'category_id'    => 'ForeignKey',
      'subcategory_id' => 'ForeignKey',
    );
  }
}
