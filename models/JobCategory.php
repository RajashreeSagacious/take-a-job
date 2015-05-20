<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_experience".
 *
 * @property integer $taj_exp_id
 * @property string $taj_exp_years
 */
class JobCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_job_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_jc_name'], 'required'],
            [['tj_jc_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_jc_id' => 'Taj Jc ID',
            'tj_jc_name' => 'Taj Jc Name',
            
        ];
    }
}
