<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_error_login".
 *
 * @property integer $tj_error_log_id
 * @property string $tj_error_email_or_phone
 * @property string $tj_error_password
 * @property string $tj_error_log_at
 * @property string $tj_error_ip_address
 * @property string $tj_error_browser
 */
class UserErrorLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_error_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [          
            [['tj_error_email_or_phone', 'tj_error_password', 'tj_error_ip_address', 'tj_error_browser'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_error_log_id' => 'Tj Error Log ID',
            'tj_error_email_or_phone' => 'Tj Error Email Or Phone',
            'tj_error_password' => 'Tj Error Password',
            'tj_error_log_at' => 'Tj Error Log At',
            'tj_error_ip_address' => 'Tj Error Ip Address',
            'tj_error_browser' => 'Tj Error Browser',
        ];
    }
}
