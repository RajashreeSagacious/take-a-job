<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;


use yii\db\Query;



class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
	public $password_hash;

    public static function tableName()
    {
        return 'tj_users';
    }  

    //print_r($users);

    //exit();

    /*private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];
	*/

    /**
     * @inheritdoc
     */
	 
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }	 
	 
    /*public static function findIdentity($id)
    {
		
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }*/

    /**
     * @inheritdoc
     */
	 
    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['tj_users_access_token' => $token]);
    }
	
    /*public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }*/

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
	 
    public static function findByemail_or_Phone($email)
    {
		
        return static::findOne(['tj_users_email' => $email]);
    }

	
    /*public static function findByUsername($email)
    {

         return static::findOne(['tj_users_email' => $email]);
		 //return static::find()->where(['tj_users_email' => $email])->one();



        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $email) === 0) {
                return new static($user);
            }
        }

        return null;
    }*/

    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token
        ]);
    }	
	
    public function getId()
    {   
        return $this->getPrimaryKey();
    }
	
	
    /**
     * @inheritdoc
     */
    /*public function getId()
    {
        return $this->id;
    }*/

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    /*public function validatePassword($password)
    {
        return $this->password === $password;
    }*/
 /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */






    public static function validatePasswordByEmail($password,$email)   
    {	
		$dbPassword = static::findOne(['tj_users_email' => $email]);	
		//if((Yii::$app->getSecurity()->validatePassword($password, $dbPassword->tj_users_pwd))){
			return $dbPassword; 
		//}else{
			//$this->addError('OldPassword', 'Old password is incorrect.');
		//	return false;
		//}
    }
     public static function validatePasswordByPhone($password,$phone)  
    {   
        $dbPassword = static::findOne(['tj_users_phone' => $phone]);    
        //if((Yii::$app->getSecurity()->validatePassword($password, $dbPassword->tj_users_pwd))){
          return $dbPassword; 
        //}else{
            //$this->addError('OldPassword', 'Old password is incorrect.');
          //  return false;
        //}//
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->getSecurity()->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }	
	
	
	
	
	
}
