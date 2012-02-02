<?php

/**
 * FriendSimilarity filter form base class.
 *
 * @package    wepost
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFriendSimilarityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'similarity' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'similarity' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('friend_similarity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FriendSimilarity';
  }

  public function getFields()
  {
    return array(
      'id1'        => 'Number',
      'id2'        => 'Number',
      'similarity' => 'Number',
    );
  }
}
