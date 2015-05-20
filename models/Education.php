<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_experience".
 *
 * @property integer $taj_exp_id
 * @property string $taj_exp_years
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_edu_title'], 'required'],
            [['tj_edu_title'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_edu_id' => 'Taj Edu ID',
            'tj_edu_title' => 'Taj Edu Title',
            'tj_edu_category' => 'Taj Edu Category',
        ];
    }
}
