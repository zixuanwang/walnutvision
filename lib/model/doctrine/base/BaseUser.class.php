<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $password
 * @property string $usertype
 * @property string $realname
 * @property string $sex
 * @property integer $age
 * @property string $headurl
 * @property timestamp $lastlogin
 * @property Doctrine_Collection $ProductUpload
 * @property Doctrine_Collection $ProductRecommendation
 * @property Doctrine_Collection $RenRenUser
 * @property Doctrine_Collection $QQUser
 * @property Doctrine_Collection $UserProductUploadLink
 * @property Doctrine_Collection $Comments
 * @property Doctrine_Collection $Friendship
 * @property Doctrine_Collection $FriendSimilarity
 * @property Doctrine_Collection $UserProductRecommendationLink
 * 
 * @method string              getUsername()                      Returns the current record's "username" value
 * @method string              getPassword()                      Returns the current record's "password" value
 * @method string              getUsertype()                      Returns the current record's "usertype" value
 * @method string              getRealname()                      Returns the current record's "realname" value
 * @method string              getSex()                           Returns the current record's "sex" value
 * @method integer             getAge()                           Returns the current record's "age" value
 * @method string              getHeadurl()                       Returns the current record's "headurl" value
 * @method timestamp           getLastlogin()                     Returns the current record's "lastlogin" value
 * @method Doctrine_Collection getProductUpload()                 Returns the current record's "ProductUpload" collection
 * @method Doctrine_Collection getProductRecommendation()         Returns the current record's "ProductRecommendation" collection
 * @method Doctrine_Collection getRenRenUser()                    Returns the current record's "RenRenUser" collection
 * @method Doctrine_Collection getQQUser()                        Returns the current record's "QQUser" collection
 * @method Doctrine_Collection getUserProductUploadLink()         Returns the current record's "UserProductUploadLink" collection
 * @method Doctrine_Collection getComments()                      Returns the current record's "Comments" collection
 * @method Doctrine_Collection getFriendship()                    Returns the current record's "Friendship" collection
 * @method Doctrine_Collection getFriendSimilarity()              Returns the current record's "FriendSimilarity" collection
 * @method Doctrine_Collection getUserProductRecommendationLink() Returns the current record's "UserProductRecommendationLink" collection
 * @method User                setUsername()                      Sets the current record's "username" value
 * @method User                setPassword()                      Sets the current record's "password" value
 * @method User                setUsertype()                      Sets the current record's "usertype" value
 * @method User                setRealname()                      Sets the current record's "realname" value
 * @method User                setSex()                           Sets the current record's "sex" value
 * @method User                setAge()                           Sets the current record's "age" value
 * @method User                setHeadurl()                       Sets the current record's "headurl" value
 * @method User                setLastlogin()                     Sets the current record's "lastlogin" value
 * @method User                setProductUpload()                 Sets the current record's "ProductUpload" collection
 * @method User                setProductRecommendation()         Sets the current record's "ProductRecommendation" collection
 * @method User                setRenRenUser()                    Sets the current record's "RenRenUser" collection
 * @method User                setQQUser()                        Sets the current record's "QQUser" collection
 * @method User                setUserProductUploadLink()         Sets the current record's "UserProductUploadLink" collection
 * @method User                setComments()                      Sets the current record's "Comments" collection
 * @method User                setFriendship()                    Sets the current record's "Friendship" collection
 * @method User                setFriendSimilarity()              Sets the current record's "FriendSimilarity" collection
 * @method User                setUserProductRecommendationLink() Sets the current record's "UserProductRecommendationLink" collection
 * 
 * @package    wepost
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('username', 'string', 16, array(
             'type' => 'string',
             'length' => 16,
             ));
        $this->hasColumn('password', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             ));
        $this->hasColumn('usertype', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('realname', 'string', 8, array(
             'type' => 'string',
             'length' => 8,
             ));
        $this->hasColumn('sex', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('age', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('headurl', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('lastlogin', 'timestamp', null, array(
             'type' => 'timestamp',
             ));


        $this->index('username_index', array(
             'fields' => 'username',
             ));
        $this->index('password_index', array(
             'fields' => 'password',
             ));
        $this->index('realname_index', array(
             'fields' => 'realname',
             ));
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product as ProductUpload', array(
             'refClass' => 'UserProductUploadLink',
             'local' => 'user_id',
             'foreign' => 'product_id'));

        $this->hasMany('Product as ProductRecommendation', array(
             'refClass' => 'UserProductRecommendationLink',
             'local' => 'user_id',
             'foreign' => 'product_id'));

        $this->hasMany('RenRenUser', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('QQUser', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('UserProductUploadLink', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Comment as Comments', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Friendship', array(
             'local' => 'id',
             'foreign' => 'id1'));

        $this->hasMany('FriendSimilarity', array(
             'local' => 'id',
             'foreign' => 'id1'));

        $this->hasMany('UserProductRecommendationLink', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}