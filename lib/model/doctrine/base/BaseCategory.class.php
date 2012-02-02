<?php

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $level
 * @property string $description
 * @property Doctrine_Collection $Product
 * @property Doctrine_Collection $Category
 * @property Doctrine_Collection $ProductCategoryLink
 * @property Doctrine_Collection $Subcategories
 * @property Doctrine_Collection $CategoryTree
 * 
 * @method integer             getLevel()               Returns the current record's "level" value
 * @method string              getDescription()         Returns the current record's "description" value
 * @method Doctrine_Collection getProduct()             Returns the current record's "Product" collection
 * @method Doctrine_Collection getCategory()            Returns the current record's "Category" collection
 * @method Doctrine_Collection getProductCategoryLink() Returns the current record's "ProductCategoryLink" collection
 * @method Doctrine_Collection getSubcategories()       Returns the current record's "Subcategories" collection
 * @method Doctrine_Collection getCategoryTree()        Returns the current record's "CategoryTree" collection
 * @method Category            setLevel()               Sets the current record's "level" value
 * @method Category            setDescription()         Sets the current record's "description" value
 * @method Category            setProduct()             Sets the current record's "Product" collection
 * @method Category            setCategory()            Sets the current record's "Category" collection
 * @method Category            setProductCategoryLink() Sets the current record's "ProductCategoryLink" collection
 * @method Category            setSubcategories()       Sets the current record's "Subcategories" collection
 * @method Category            setCategoryTree()        Sets the current record's "CategoryTree" collection
 * 
 * @package    wepost
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('level', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));


        $this->index('level_index', array(
             'fields' => 'level',
             ));
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product', array(
             'refClass' => 'ProductCategoryLink',
             'local' => 'category_id',
             'foreign' => 'product_id'));

        $this->hasMany('Category', array(
             'refClass' => 'CategoryTree',
             'local' => 'subcategory_id',
             'foreign' => 'category_id'));

        $this->hasMany('ProductCategoryLink', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('Category as Subcategories', array(
             'refClass' => 'CategoryTree',
             'local' => 'category_id',
             'foreign' => 'subcategory_id'));

        $this->hasMany('CategoryTree', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}