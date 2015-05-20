<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_skills".
 *
 * @property integer $tj_sk_id
 * @property string $tj_sk_name
 */
class TjJobCategory extends \yii\db\ActiveRecord
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
            [['tj_jc_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_jc_id' => 'Tj Jc ID',
            'tj_jc_name' => 'Tj Jc Name',
        ];
    }
}
