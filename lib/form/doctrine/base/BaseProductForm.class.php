<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'name'                     => new sfWidgetFormTextarea(),
      'brand_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Brand'), 'add_empty' => true)),
      'size'                     => new sfWidgetFormTextarea(),
      'barcode'                  => new sfWidgetFormTextarea(),
      'qrcode'                   => new sfWidgetFormTextarea(),
      'description'              => new sfWidgetFormTextarea(),
      'overallrating'            => new sfWidgetFormInputText(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
      'color_list'               => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Color')),
      'material_list'            => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Material')),
      'category_list'            => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Category')),
      'user_recommendation_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'User')),
      'user_upload_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'User')),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                     => new sfValidatorString(),
      'brand_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Brand'), 'required' => false)),
      'size'                     => new sfValidatorString(array('required' => false)),
      'barcode'                  => new sfValidatorString(array('required' => false)),
      'qrcode'                   => new sfValidatorString(array('required' => false)),
      'description'              => new sfValidatorString(array('required' => false)),
      'overallrating'            => new sfValidatorNumber(array('required' => false)),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
      'color_list'               => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Color', 'required' => false)),
      'material_list'            => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Material', 'required' => false)),
      'category_list'            => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Category', 'required' => false)),
      'user_recommendation_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'User', 'required' => false)),
      'user_upload_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'User', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['color_list']))
    {
      $this->setDefault('color_list', $this->object->Color->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['material_list']))
    {
      $this->setDefault('material_list', $this->object->Material->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['category_list']))
    {
      $this->setDefault('category_list', $this->object->Category->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['user_recommendation_list']))
    {
      $this->setDefault('user_recommendation_list', $this->object->UserRecommendation->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['user_upload_list']))
    {
      $this->setDefault('user_upload_list', $this->object->UserUpload->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveColorList($con);
    $this->saveMaterialList($con);
    $this->saveCategoryList($con);
    $this->saveUserRecommendationList($con);
    $this->saveUserUploadList($con);

    parent::doSave($con);
  }

  public function saveColorList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['color_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Color->getPrimaryKeys();
    $values = $this->getValue('color_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Color', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Color', array_values($link));
    }
  }

  public function saveMaterialList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['material_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Material->getPrimaryKeys();
    $values = $this->getValue('material_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Material', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Material', array_values($link));
    }
  }

  public function saveCategoryList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['category_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Category->getPrimaryKeys();
    $values = $this->getValue('category_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Category', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Category', array_values($link));
    }
  }

  public function saveUserRecommendationList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['user_recommendation_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->UserRecommendation->getPrimaryKeys();
    $values = $this->getValue('user_recommendation_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('UserRecommendation', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('UserRecommendation', array_values($link));
    }
  }

  public function saveUserUploadList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['user_upload_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->UserUpload->getPrimaryKeys();
    $values = $this->getValue('user_upload_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('UserUpload', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('UserUpload', array_values($link));
    }
  }

}
