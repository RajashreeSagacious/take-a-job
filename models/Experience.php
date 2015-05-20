<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_experience".
 *
 * @property integer $tj_exp_id
 * @property string $tj_exp_years
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_exp_years'], 'required'],
            [['tj_exp_years'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_exp_id' => 'Tj Exp ID',
            'tj_exp_years' => 'Tj Exp Years',
        ];
    }
}
