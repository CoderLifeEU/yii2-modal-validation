<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Security;

/**
 * LoginForm is the model behind the login form.
 */
class UpdatePasswordForm extends Model
{
        public $id;
        public $password;
        public $confirmpassword;
        //public $oldpassword;
	

	/**
	 * @return array the validation rules.
	 */
	public function rules()
	{
		return array(
			// username and password are both required
			array(array('password','confirmpassword'), 'required'),
			// username is validated by validateUsername()
			array('password', 'validatePasswordEquals'),
		);
	}

        /*validates username*/
        public function validatePasswordEquals()
        {
            if($this->password!=$this->confirmpassword)
            {
                $errorMsg= 'Passwords must be equal.';
                $this->addError('confirmpassword',$errorMsg);
            }
            if(strlen($this->password)<=8)
            {
                $errorMsg= 'Password must be at least 8 symbols length';
                $this->addError('password',$errorMsg);
            }
        }
        



}
