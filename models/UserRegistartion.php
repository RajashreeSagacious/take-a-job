<?php

namespace app\models;

use Yii;

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
 * @property TjJobView[] $tjJobViews
 * @property TjLoggerHistory[] $tjLoggerHistories
 * @property TjSummary[] $tjSummaries
 * @property TjUsersQualification[] $tjUsersQualifications
 */
class UserRegistartion extends \yii\db\ActiveRecord
{
    public $verifyCode;
    public $UploadResume;
    public $TermsAndConditions;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_users_fname', 'tj_users_lname','tj_users_phone','tj_users_location', 'tj_users_qualification', 'tj_users_email', 'tj_users_uname', 'tj_users_experience', 'tj_users_job_category', 'tj_users_skills','UploadResume'], 'required'],
            [['tj_users_job_category', 'tj_users_phone_verify_status', 'tj_users_resume_status', 'tj_users_pincode', 'tj_users_status', 'tj_users_change_pass_status', 'tj_users_utype'], 'integer'],
            [['tj_users_resume_content', 'tj_users_profile_status'], 'string'],
            [['tj_users_register_date', 'tj_users_activation_date', 'tj_users_modified_date', 'tj_users_last_login', 'tj_users_link_activation_date'], 'safe'],
            [['tj_users_fname'], 'match', 'pattern' => '/^[A-Za-z]+$/'],
            [['tj_users_lname'], 'match', 'pattern' => '/^[A-Za-z]+$/'],
            [['tj_users_phone_otp'], 'integer'],
            [['tj_users_phone'], 'integer'],
            ['TermsAndConditions', 'required', 'requiredValue' => 1,'message' => 'You must agree to the terms and conditions'],
             //validate email address
             ['tj_users_email','email'],
            
             //Upload file Validation
             // [['UploadResume'], 'file', 'skipOnEmpty' => false],

          //File Type Validation
             ['UploadResume', 'file', 'extensions' => ['doc', 'docx','pdf'], 'maxSize' => 1024 * 1024 * 2],
             // Captcha validation
             ['verifyCode', 'captcha'],
            
            [['tj_users_email'], 'unique'],
            [['tj_users_phone'], 'unique'],
            [['tj_users_fname','tj_users_phone_otp','tj_users_pwd','tj_users_lname','tj_users_email','tj_users_phone','tj_users_location','tj_users_job_category','tj_users_experience','tj_users_skills','tj_users_qualification'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {

        return [
            'tj_id' => 'Tj ID',
            'tj_users_fname' => 'First Name',
            'tj_users_lname' => 'Last Name',
            'tj_users_email' => 'Email',
            'tj_users_uname' => 'User Name',
            'tj_users_pwd' => 'Password',
            'tj_users_experience' => 'Experience',
            'tj_users_job_category' => 'Job Category',
            'tj_users_skills' => 'Skills',
            'tj_users_location' => 'Location',
            'tj_users_qualification' => ' Qualification',
            'tj_users_phone' => 'Contact No',
            'tj_users_phone_otp' => 'Phone OTP',
            'tj_users_phone_verify_status' => 'Phone Verify Status',
            'tj_users_resume_name' => 'Resume Name',
            'tj_users_resume_path' => 'Resume Path',
            'tj_users_resume_type' => 'Resume Type',
            'tj_users_resume_content' => 'Resume Content',
            'tj_users_resume_status' => 'Resume Status',
            'tj_users_pincode' => 'Pincode',
            'tj_users_profile_photo' => 'Profile Photo',
            'tj_users_profile_status' => 'Profile Status',
            'tj_users_browser_name' => 'Browser Name',
            'tj_users_register_date' => 'Register Date',
            'tj_users_activation_date' => 'Activation Date',
            'tj_users_status' => 'Users Status',
            'tj_users_change_pass_status' => 'Change Pass Status',
            'tj_users_utype' => 'Tj Users Utype',
            'tj_users_modified_date' => 'Modified Date',
            'tj_users_last_login' => 'Last Login',
            'tj_users_ip_address' => 'Ip Address',
            'tj_users_link_activation_date' => 'Link Activation Date',
            'tj_users_auth_key' => 'Auth Key',
            'tj_users_access_token' => 'Tj Users Access Token',
            'verifyCode' =>'Verification Code',
           
        ];
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
    public function getTjSummaries()
    {
        return $this->hasMany(TjSummary::className(), ['tj_summary_user_id' => 'tj_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjUsersQualifications()
    {
        return $this->hasMany(TjUsersQualification::className(), ['tj_uq_users_id' => 'tj_id']);
    }
}
