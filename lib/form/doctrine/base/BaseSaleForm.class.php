<?php

/**
 * Sale form base class.
 *
 * @method Sale getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSaleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'product_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'store_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Store'), 'add_empty' => false)),
      'salediscount'  => new sfWidgetFormInputText(),
      'salestarttime' => new sfWidgetFormDateTime(),
      'saleendtime'   => new sfWidgetFormDateTime(),
      'salecoupon'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'store_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Store'))),
      'salediscount'  => new sfValidatorNumber(),
      'salestarttime' => new sfValidatorDateTime(),
      'saleendtime'   => new sfValidatorDateTime(),
      'salecoupon'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sale[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sale';
  }

}
