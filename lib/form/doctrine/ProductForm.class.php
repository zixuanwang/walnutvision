<?php

/**
 * Product form.
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm {
	public function configure() {
		$this->useFields ( array ("name", "brand_id", "size", "description"));
		$this->widgetSchema ['name'] = new sfWidgetFormInput ();
		$this->widgetSchema['brand_id'] = new sfWidgetFormDoctrineChoice(array('model'=>'Brand','multiple'=>false));
		$this->widgetSchema['photo'] = new  sfWidgetFormInputFile();
		$this->widgetSchema['description'] = new sfWidgetFormInput();		
		$this->widgetSchema['size'] = new sfWidgetFormInput();
		$this->widgetSchema['categories'] = new sfWidgetFormInputHidden();	
		$this->widgetSchema->setNameFormat ( 'product[%s]' );
		$this->setValidator('name', new sfValidatorString(array('min_length' => 1)));
		$this->setValidator('description', new sfValidatorString(array('min_length' => 1)));
		$this->setValidator('photo',  new sfValidatorFile ( array ('max_size' => 500000, 'mime_types' => 'web_images' ) ));
		$this->widgetSchema->setLabels ( array ('name' => '产品名：', 'brand_id' => '品牌：',
		'photo' => '照片:',
		'description' => '产品描述:',
		'categories' => '类别:') 
		);
	}
}
