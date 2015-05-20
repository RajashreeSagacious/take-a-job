<?php

namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\db\Query;

class ForgotpassForm extends Model
{

public $Email;



/*Array Validation Rules */

public function rules(){

	return[
		//Required Fields Validation
		    [['Email'],'required'],
		//validate email address
		    ['Email','email'],
	];
	
}


public function forgotpass()
 {
			$query = new Query();
		    $query->select('tj_users_pwd, tj_users_email' )
		    ->from('tj_users')
		    ->where(['tj_users_email'=>$this->Email]);
		 	$rows = $query->all();
		 	if($rows != null)
		 	{
		 		return $rows[0]['tj_users_email'];	
		    }else{
		 		$this->addError('Email','email does not exists.');
		 		return false;
		 	}
 }


public function updatePwd($paswrd , $mail_Id)
    {	
		$connection = Yii::$app->db; 
    	$sql1="Update tj_users SET tj_users_pwd='".mysql_real_escape_string($paswrd)."' WHERE tj_users_email='".$mail_Id."'"; 
    	$command = $connection->createCommand($sql1);
		$res = $command->execute();
		return $res;

    }

}
?>