<?php

/**
 * ProductSimilarity filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductSimilarityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product1'), 'add_empty' => true)),
      'id2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product2'), 'add_empty' => true)),
      'similarity' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id1'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product1'), 'column' => 'id')),
      'id2'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product2'), 'column' => 'id')),
      'similarity' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('product_similarity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductSimilarity';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id1'        => 'ForeignKey',
      'id2'        => 'ForeignKey',
      'similarity' => 'Number',
    );
  }
}
