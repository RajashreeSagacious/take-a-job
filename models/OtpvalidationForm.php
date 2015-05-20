<?php

namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\db\Query;
use yii\db\Command;

class OtpvalidationForm extends Model
{

//public $Code;
public $EnterOTP;
public $user_id;
//public $Phone;
/*Array Validation Rules */

public function rules(){

    return[
    //Required Fields Validation
        ['EnterOTP','required']
    //validate email address
     
    
    ];
    
}


public function verifyOTP($user_id)
  {

     $query = new Query();
     $query->select('tj_users_phone_otp') ->from('tj_users')->Where(['tj_id'=>$user_id]);
     $rows = $query->all();
    
     return $rows;

  }

 public function updatePhonestatus($user_id)
    {
            $connection = Yii::$app->db; 
            $sql="Update tj_users SET tj_users_phone_verify_status='1' WHERE tj_id='".$user_id."'"; 
            $command = $connection->createCommand($sql);
            $res = $command->execute();
        
    }

 
 public function recentOTP($user_id)
 {
     $connection = Yii::$app->db; 
     $sql="Update tj_users SET  tj_users_phone_otp='' WHERE tj_id='".$user_id."'"; 
     $command = $connection->createCommand($sql);
     $res = $command->execute(); 
     return $res;
 }


 public function get_user_detail($user_id)
 {
     $query = new Query();
     $query->select('tj_users_phone','tj_users_email') ->from('tj_users')->Where(['tj_id'=>$user_id]);
     $rows = $query->all();
     return $rows;

 }

}
?>