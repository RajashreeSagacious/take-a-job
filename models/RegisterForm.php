<?php
namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\db\Command;

class RegisterForm extends Model
{

	public $FirstName;
	public $LastName;
	public $Email;
	public $ContactNo;
	public $Location;
	public $JobCategory;
	public $Experience;
	public $Skills;
	public $HighestQualification;
	public $verifyCode;
	public $UploadResume;
    public $EnterOTP;
    public $accept;
	public $TermsAndConditions;
	public $key=array();
	public function rules(){
		return[

		  //Required Fields Validation

		     [['FirstName','LastName','Email','ContactNo','Location','JobCategory','Experience','Skills','HighestQualification'], 'trim'],

			 [['FirstName','LastName','Email','ContactNo','Location','JobCategory','Experience','Skills','HighestQualification'],'required'],
 
             ['FirstName', 'match', 'pattern' => '/^[A-Za-z]+$/'],
		      
		     ['LastName', 'match', 'pattern' => '/^[A-Za-z]+$/'],

		  //validate email address
			 ['Email','email'],

		  // Contact Number Validation 
			 ['ContactNo', 'integer'],

          //Upload file Validation
			 [['UploadResume'], 'file', 'skipOnEmpty' => false],

          //File Type Validation
			 ['UploadResume', 'file', 'extensions' => ['txt', 'doc', 'docx','pdf'], 'maxSize' => 1024 * 1024 * 2],

		  // Captcha validation
			 ['verifyCode', 'captcha'],

		  // rememberMe must be a boolean value
			 ['rememberMe', 'boolean'],
			 ['TermsAndConditions', 'required', 'requiredValue' => 1,'message' => 'You must agree to the terms and conditions'],


			];

	}

	public static function tableName()
	{
		return 'tj_users';
	}

	public function attributeLabels()
	{
		return[
		  'verifyCode' =>'Verification Code',
		];
	}



	public function savedata($cs , $fil , $con)
	{

		$browser = Yii::$app->request->userAgent; 
	    $userIP = Yii::$app->request->userIP;
     	$connection = Yii::$app->db; 
		$email = $cs['Email'];
		$phonenum = $cs['ContactNo'];
        $query = new Query();
        $query->select('count(*) as cnt,tj_users_email') ->from('tj_users') ->Where(['tj_users_email'=>$email])-> orWhere(['tj_users_phone'=>$phonenum]);
        $rows = $query->all();
        $reccount =  $rows[0]['cnt'];
            
        if ($reccount == 0) 
          {
          	    $key_skill='';
          	    foreach ($cs['key']['Skills'] as $key => $value) 
          	    {
          		    $key_skill=implode(',',$cs['key']['Skills']);
                }
          	        $sql = "insert into tj_users(`tj_users_fname`,`tj_users_lname`,`tj_users_email`,`tj_users_uname`,`tj_users_experience`,`tj_users_job_category`,`tj_users_skills`,`tj_users_location`,`tj_users_qualification`,`tj_users_phone`,`tj_users_resume_name`,`tj_users_resume_type`,`tj_users_resume_content`,`tj_users_browser_name`,`tj_users_register_date`,`tj_users_ip_address`)values('".$cs['FirstName']."','".$cs['LastName']."','".$cs['Email']."','".$cs['FirstName']." ".$cs['LastName']."','".$cs['Experience']."','".$cs['JobCategory']."','".$key_skill."','".$cs['Location']."','".$cs['HighestQualification']."','".$cs['ContactNo']."','".$fil[0]."','".$fil[2]."','".mysql_real_escape_string($con)."','".$browser."',NOW(),'".$userIP."')";
					$command = $connection->createCommand($sql);
				    $rowCount = $command->execute();
				    return  $rowCount;
 		  }else {
	     
	      	   return '2';
	      }

	}



	public function updateOTP($phone , $rand , $emailid)
	{ 
		$connection = Yii::$app->db; 
        $sql = "Update tj_users SET tj_users_phone_otp='".$rand."' WHERE tj_users_email='".$emailid."' and 	tj_users_phone='".$phone."' ";
		$command = $connection->createCommand($sql);
		$res = $command->execute();
		return $res;
	}


    public function updatePwd($paswrd , $mail_Id)
    {	
		$connection = Yii::$app->db; 
    	$sql1="Update tj_users SET tj_users_pwd='".mysql_real_escape_string($paswrd)."' WHERE tj_users_email='".$mail_Id."'"; 
    	$command = $connection->createCommand($sql1);
		$res = $command->execute();
		return $res;

    }


	public function verifyOTP($user_id)
	{
		$query = new Query();
        $query->select('tj_users_phone_otp') ->from('tj_users') ->Where(['tj_id'=>$user_id]);
        $rows = $query->all();
        return $rows;

	}


}

?>