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
 * @property TjEmployerOrDesignation[] $tjEmployerOrDesignations
 * @property TjJobView[] $tjJobViews
 * @property TjLoggerHistory[] $tjLoggerHistories
 * @property TjSnapshot[] $tjSnapshots
 * @property TjSummary[] $tjSummaries
 * @property TjUsersAddress[] $tjUsersAddresses
 * @property TjUsersCertification[] $tjUsersCertifications
 * @property TjUsersQualification[] $tjUsersQualifications
 */
class UserOtpValidation extends \yii\db\ActiveRecord
{
    public $user_id;
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
            [['tj_users_phone_otp'],'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_users_phone_otp' => 'Enter Otp'
        ];
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
