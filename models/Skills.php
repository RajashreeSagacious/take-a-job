<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_skills".
 *
 * @property integer $tj_sk_id
 * @property string $tj_sk_name
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_sk_name'], 'required'],
            [['tj_sk_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_sk_id' => 'Tj Sk ID',
            'tj_sk_name' => 'Tj Sk Name',
        ];
    }
}
