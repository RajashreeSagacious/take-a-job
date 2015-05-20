<?php

namespace app\models;
use yii;
use yii\base\Model;
use yii\db\Query;
use yii\db\ActiveRecord;

class ChangepassForm extends Model
{
public $OldPassword;
public $NewPassword;
public $ConfirmPassword;

/*Array Validation Rules */
public $id;
public function rules(){

	return[
	//Required Fields Validation   
	    [['OldPassword','NewPassword','ConfirmPassword'],'required'],
	//change password
    ['NewPassword', 'compare', 'compareAttribute'=> 'ConfirmPassword' ],
    ['OldPassword', 'validateOldPassword'],
	];
}
 
public function changepass(){
    
          
    $user = $this->getUser();
    $this->$id = $user->getId();

     $valid = $this->validateOldPassword();
    if($valid){
     
	 $connection=Yii::$app->db; 
     if($this->NewPassword!=null)
         {
            $hash_new_password = Yii::$app->getSecurity()->generatePasswordHash($this->NewPassword);
            $sql="update tj_users  set `tj_users_pwd`='". $hash_new_password."' where `tj_id`=".$this->id;
	       $command=$connection->createCommand($sql);
   	       return $command->execute();
   }
	 }
 }

public function validateOldPassword()
    {
      
      
	 $query = new Query();
     $query->select('tj_users_pwd') ->from('tj_users') ->where(['tj_id'=>$this->id]);
    // build and execute the query
     $rows = $query->all();
     $hashpwd = $rows[0]['tj_users_pwd'];



    if((Yii::$app->getSecurity()->validatePassword($this->OldPassword, $hashpwd))){
     return true; 
    }else{
        $this->addError('OldPassword', 'Old password is incorrect.');
     return false;
        }
    
      }
}
?>