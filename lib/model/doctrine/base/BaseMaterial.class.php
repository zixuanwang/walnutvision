<?php

/**
 * BaseMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $materialname
 * @property Doctrine_Collection $Product
 * @property Doctrine_Collection $ProductMaterialLink
 * 
 * @method string              getMaterialname()        Returns the current record's "materialname" value
 * @method Doctrine_Collection getProduct()             Returns the current record's "Product" collection
 * @method Doctrine_Collection getProductMaterialLink() Returns the current record's "ProductMaterialLink" collection
 * @method Material            setMaterialname()        Sets the current record's "materialname" value
 * @method Material            setProduct()             Sets the current record's "Product" collection
 * @method Material            setProductMaterialLink() Sets the current record's "ProductMaterialLink" collection
 * 
 * @package    wepost
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('material');
        $this->hasColumn('materialname', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product', array(
             'refClass' => 'ProductMaterialLink',
             'local' => 'material_id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductMaterialLink', array(
             'local' => 'id',
             'foreign' => 'material_id'));
    }
}