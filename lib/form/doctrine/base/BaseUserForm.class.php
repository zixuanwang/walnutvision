<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'username'                    => new sfWidgetFormInputText(),
      'password'                    => new sfWidgetFormInputText(),
      'usertype'                    => new sfWidgetFormTextarea(),
      'realname'                    => new sfWidgetFormInputText(),
      'sex'                         => new sfWidgetFormTextarea(),
      'age'                         => new sfWidgetFormInputText(),
      'headurl'                     => new sfWidgetFormTextarea(),
      'lastlogin'                   => new sfWidgetFormDateTime(),
      'created_at'                  => new sfWidgetFormDateTime(),
      'updated_at'                  => new sfWidgetFormDateTime(),
      'product_upload_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
      'product_recommendation_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Product')),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'username'                    => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'password'                    => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'usertype'                    => new sfValidatorString(array('required' => false)),
      'realname'                    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'sex'                         => new sfValidatorString(array('required' => false)),
      'age'                         => new sfValidatorInteger(array('required' => false)),
      'headurl'                     => new sfValidatorString(array('required' => false)),
      'lastlogin'                   => new sfValidatorDateTime(array('required' => false)),
      'created_at'                  => new sfValidatorDateTime(),
      'updated_at'                  => new sfValidatorDateTime(),
      'product_upload_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
      'product_recommendation_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Product', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['product_upload_list']))
    {
      $this->setDefault('product_upload_list', $this->object->ProductUpload->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['product_recommendation_list']))
    {
      $this->setDefault('product_recommendation_list', $this->object->ProductRecommendation->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveProductUploadList($con);
    $this->saveProductRecommendationList($con);

    parent::doSave($con);
  }

  public function saveProductUploadList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['product_upload_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->ProductUpload->getPrimaryKeys();
    $values = $this->getValue('product_upload_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('ProductUpload', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('ProductUpload', array_values($link));
    }
  }

  public function saveProductRecommendationList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['product_recommendation_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->ProductRecommendation->getPrimaryKeys();
    $values = $this->getValue('product_recommendation_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('ProductRecommendation', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('ProductRecommendation', array_values($link));
    }
  }

}
