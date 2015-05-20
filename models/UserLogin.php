<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\UserErrorLogin;
use app\models\UserLoggedHistory;
use yii\base\NotSupportedException; // For handling exceptionn
use yii\db\ActiveRecord; // For handling activerecord
use yii\helpers\Security; // For handling security purpose
use yii\web\IdentityInterface; // For handling user identityInterface

use yii\behaviors\TimestampBehavior; // For handling timeBehaviors
use yii\db\Expression; // For handling Dbexpressions
/**
 * This is the model class for table "tj_users".
 *
 * @property integer $tj_id
 * @property string $tj_users_fname
 * @property string $tj_users_lname
 * @property string $tj_users_email
 * @property string $tj_users_uname
 * @property string $tj_users_pwd
 * @property string $tj_users_experience
 * @property integer $tj_users_job_category
 * @property string $tj_users_skills
 * @property string $tj_users_location
 * @property string $tj_users_qualification
 * @property string $tj_users_phone
 * @property string $tj_users_phone_otp
 * @property integer $tj_users_phone_verify_status
 * @property string $tj_users_resume_name
 * @property string $tj_users_resume_path
 * @property string $tj_users_resume_type
 * @property resource $tj_users_resume_content
 * @property integer $tj_users_resume_status
 * @property integer $tj_users_pincode
 * @property string $tj_users_profile_photo
 * @property string $tj_users_profile_status
 * @property string $tj_users_browser_name
 * @property string $tj_users_register_date
 * @property string $tj_users_activation_date
 * @property integer $tj_users_status
 * @property integer $tj_users_change_pass_status
 * @property integer $tj_users_utype
 * @property string $tj_users_modified_date
 * @property string $tj_users_last_login
 * @property string $tj_users_ip_address
 * @property string $tj_users_link_activation_date
 * @property string $tj_users_auth_key
 * @property string $tj_users_access_token
 *
 * @property TjCoverLetter[] $tjCoverLetters
 * @property TjEmployerOrDesignation[] $tjEmployerOrDesignations
 * @property TjJobApplied[] $tjJobApplieds
 * @property TjJobSaved[] $tjJobSaveds
 * @property TjJobView[] $tjJobViews
 * @property TjLoggerHistory[] $tjLoggerHistories
 * @property TjSnapshot[] $tjSnapshots
 * @property TjSummary[] $tjSummaries
 * @property TjUsersAddress[] $tjUsersAddresses
 * @property TjUsersCertification[] $tjUsersCertifications
 * @property TjUsersQualification[] $tjUsersQualifications
 */




//class UserLogin extends \yii\db\ActiveRecord
 class UserLogin extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $email_or_Phone;
    public $Password;
    public $RememberMe = true;
    public $loggedinBy;
    /**
     * @inheritdoc
     */
    // S Traz
    public function rules()
    {
         return [
            // username and password are both required
            [['email_or_Phone', 'Password','loggedinBy'], 'required'],
            // rememberMe must be a boolean value
            ['RememberMe', 'boolean'],
            ['Password', 'validatePassword'],

            // password is validated by validatePassword()
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_or_Phone' => 'Email Or Phone',
            'RememberMe' => 'RememberMe',
            'Password' => 'Password',
            'loggedinBy'=>'Please Select'
        ];
    }
  public static function tableName()
    {
        return 'tj_users';
    }

public function remenberMe()
    {
        if($this->validate()) {
            return  $this->RememberMe ? 3600*24*30 : 0;
        } else {
            return false;
        }
    }

public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {            
             $userData = $this->getUser();
             //echo "<pre>";print_r($userData);exit;
            if(!$userData || !Yii::$app->getSecurity()->validatePassword($this->Password,$userData->tj_users_pwd)){
                $ErrorLoginModel = new UserErrorLogin();
                $ErrorLoginModel->tj_error_email_or_phone=$this->email_or_Phone;
                $ErrorLoginModel->tj_error_password=$this->Password;
                $ErrorLoginModel->tj_error_ip_address=$_SERVER['REMOTE_ADDR'];
                $ErrorLoginModel->tj_error_browser=$_SERVER['HTTP_USER_AGENT'];

                $ErrorLoginModel->save();
                $this->addError($attribute, 'Incorrect username or password.');                

            }else{ 
                 Yii::$app->session['userid'] = $userData->tj_id;
                 $LoggedHistoryModel = new UserLoggedHistory();
                 $LoggedHistoryModel->tj_logger_user_id=$userData->tj_id;
                 $LoggedHistoryModel->tj_logger_Ip_address=$_SERVER['REMOTE_ADDR'];
                 $LoggedHistoryModel->tj_logger_browser=$_SERVER['HTTP_USER_AGENT'];
                 if($LoggedHistoryModel->save()){return true;}                
            }
        }  
    }
    public function getUser()
     {
       if(strpos($this->email_or_Phone,'@') !== false) {
           $userData = static::findOne(['tj_users_email' => $this->email_or_Phone]);
         }
       else{
           $userData = static::findOne(['tj_users_phone' => $this->email_or_Phone]);  
        }
     return $userData;
     }
 

        /**
         * @inheritdoc
         */
     
   

        /**
        * @inheritdoc
        */
        public static function findIdentity($id)
        {
        //To get the user value and fetch into db
                return static::findOne(['tj_id' => $id]);
        }

        /**
        * @inheritdoc
        */
        public static function findIdentityByAccessToken($token, $type = null)
        {
        foreach (self::$users as $user) {
                if ($user['accessToken'] === $token) {
                return new static($user);
                }
        }
        return null;
        }

        /**
        * Finds user by username
        *
        * @param  string        $username
        * @return static|null
        */
        public static function findByUsername($username)
        {
                return static::findOne(['tj_fname' => $username]);
        }

        /**
        * @inheritdoc
        */
        public function getId()
        {
        return $this->getPrimaryKey();
        }

        /**
        * @inheritdoc
        */
        public function getAuthKey()
        {
        return isset($this->auth_key) ? $this->auth_key  : NULL;
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
       /* public function validatePassword($password)
        {
        return $this->password === $password;
        }*/
        
        /**
         * Using behaviours method save the created and updated timemin db 
         * @see \yii\base\Component::behaviors()
         */
        public function behaviors()
        {
        return [
                'timestamp' => [
                                'class' => TimestampBehavior::className(),
                                'attributes' => [
                                                ActiveRecord::EVENT_BEFORE_INSERT => ['created', 'updated'],
                                                ActiveRecord::EVENT_BEFORE_UPDATE => ['updated']
                                ],
                                'value' => new Expression('NOW()'),
                ],
        ];
        }

    // E Traz
    

    /**
     * @inheritdoc
     */

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjCoverLetters()
    {
        return $this->hasMany(TjCoverLetter::className(), ['tj_cove_letterr_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjEmployerOrDesignations()
    {
        return $this->hasMany(TjEmployerOrDesignation::className(), ['tj_employer_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjJobApplieds()
    {
        return $this->hasMany(TjJobApplied::className(), ['tj_ja_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjJobSaveds()
    {
        return $this->hasMany(TjJobSaved::className(), ['tj_js_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjJobViews()
    {
        return $this->hasMany(TjJobView::className(), ['tj_jv_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjLoggerHistories()
    {
        return $this->hasMany(TjLoggerHistory::className(), ['tj_logger_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjSnapshots()
    {
        return $this->hasMany(TjSnapshot::className(), ['tj_snap_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjSummaries()
    {
        return $this->hasMany(TjSummary::className(), ['tj_summary_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjUsersAddresses()
    {
        return $this->hasMany(TjUsersAddress::className(), ['tj_add_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjUsersCertifications()
    {
        return $this->hasMany(TjUsersCertification::className(), ['tj_uc_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjUsersQualifications()
    {
        return $this->hasMany(TjUsersQualification::className(), ['tj_uq_users_id' => 'tj_id']);
    }
}
