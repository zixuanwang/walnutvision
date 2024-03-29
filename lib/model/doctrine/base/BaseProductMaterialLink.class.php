<?php

/**
 * BaseProductMaterialLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $product_id
 * @property integer $material_id
 * @property Product $Product
 * @property Material $Material
 * 
 * @method integer             getProductId()   Returns the current record's "product_id" value
 * @method integer             getMaterialId()  Returns the current record's "material_id" value
 * @method Product             getProduct()     Returns the current record's "Product" value
 * @method Material            getMaterial()    Returns the current record's "Material" value
 * @method ProductMaterialLink setProductId()   Sets the current record's "product_id" value
 * @method ProductMaterialLink setMaterialId()  Sets the current record's "material_id" value
 * @method ProductMaterialLink setProduct()     Sets the current record's "Product" value
 * @method ProductMaterialLink setMaterial()    Sets the current record's "Material" value
 * 
 * @package    wepost
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductMaterialLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product_material_link');
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('material_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Product', array(
             'local' => 'product_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Material', array(
             'local' => 'material_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}