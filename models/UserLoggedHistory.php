<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_logger_history".
 *
 * @property integer $tj_logger_id
 * @property integer $tj_logger_user_id
 * @property string $tj_logged_in_at
 * @property string $tj_logger_Ip_address
 * @property string $tj_logger_browser
 *
 * @property TjUsers $tjLoggerUser
 */
class UserLoggedHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_logger_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [           
            [['tj_logger_user_id','tj_logger_Ip_address','tj_logger_browser'], 'safe']        
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_logger_id' => 'Tj Logger ID',
            'tj_logger_user_id' => 'Tj Logger User ID',
            'tj_logged_in_at' => 'Tj Logged In At',
            'tj_logger_Ip_address' => 'Tj Logger  Ip Address',
            'tj_logger_browser' => 'Tj Logger Browser',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTjLoggerUser()
    {
        return $this->hasOne(TjUsers::className(), ['tj_id' => 'tj_logger_user_id']);
    }
}
