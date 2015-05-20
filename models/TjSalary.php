<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_skills".
 *
 * @property integer $tj_sk_id
 * @property string $tj_sk_name
 */
class TjSalary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_salary_range';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_sr_name'], 'required'],
            [['tj_sr_name'], 'integer', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_sr_id' => 'Tj Sr ID',
            'tj_sr_name' => 'Tj Sr Name',
        ];
    }
}
