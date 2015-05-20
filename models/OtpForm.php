<?php

namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\base\Model;

class OtpForm extends Model
{

public $Code;



/*Array Validation Rules */

public function rules(){

    return[
    //Required Fields Validation
        [['Code'],'required'],
    //validate email address
     
    
    ];
    
}

}
?>