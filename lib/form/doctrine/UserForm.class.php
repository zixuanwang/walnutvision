<?php

/**
 * User form.
 *
 * @package    wepost
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm {
	public function configure() {
		unset ( $this ['id'], $this ['created_at'], $this ['updated_at'] );
		$this->useFields ( array ('username', 'password', 'realname', 'sex', 'age', 'headurl' ) );
		$this->widgetSchema ['password'] = new sfWidgetFormInputPassword ();
		$this->widgetSchema ['password_confirmation'] = new sfWidgetFormInputPassword ();
		$this->validatorSchema ['password']->setOption ( 'required', true );
		$this->validatorSchema ['password_confirmation'] = clone $this->validatorSchema ['password'];
		$this->mergePostValidator ( new sfValidatorSchemaCompare ( 'password', '==', 'password_confirmation', array (), array ('invalid' => '两次密码不一致' ) ) );
		$this->widgetSchema->moveField ( 'password_confirmation', 'after', 'password' );
		$this->widgetSchema ['sex'] = new sfWidgetFormChoice ( array ('choices' => array ('男', '女' ), 'expanded' => false, 'multiple' => false ) );
		$this->widgetSchema ['age'] = new sfWidgetFormChoice ( array ('choices' => range(7,99), 'expanded' => false, 'multiple' => false ) );
		$this->widgetSchema ['headurl'] = new sfWidgetFormInputFile ();
		$this->widgetSchema->setNameFormat ( 'user[%s]' );
		$this->setValidators ( array ('username' => new sfValidatorDoctrineUnique ( array ('model' => 'User', 'column' => 'username' ) ), 'password' => new sfValidatorString ( array ('min_length' => 6 ) ), 'password_confirmation' => new sfValidatorString ( array ('min_length' => 6 ) ), 'realname' => new sfValidatorString (), 'sex' => new sfValidatorString (), 'age' => new sfValidatorString (), 'headurl' => new sfValidatorFile ( array ('max_size' => 500000, 'mime_types' => 'web_images' ) ) ) );
		$this->widgetSchema->setLabels ( array ('username' => '用户名：', 'password' => '密码：', 'password_confirmation' => '确认密码：', 'realname' => '真实姓名：', 'sex' => '性别：', 'age' => '年龄：', 'headurl' => '头像图片：' ) );
	}
}