<?php

/**
 * ProductSimilarity form base class.
 *
 * @method ProductSimilarity getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductSimilarityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product1'), 'add_empty' => false)),
      'id2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product2'), 'add_empty' => false)),
      'similarity' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id1'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product1'))),
      'id2'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product2'))),
      'similarity' => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('product_similarity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductSimilarity';
  }

}
