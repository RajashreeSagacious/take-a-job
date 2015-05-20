<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_skills".
 *
 * @property integer $tj_sk_id
 * @property string $tj_sk_name
 */
class TjDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_districts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_dt_districtname'], 'required'],
            [['tj_dt_districtname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc tj_dt_districtId    	tj_dt_stateId     tj_dt_districtname
     */
    public function attributeLabels()
    {
        return [
            'tj_dt_districtId' => 'Tj Dt DistrictId',
            'tj_dt_districtname' => 'Tj Dt Districtname',
			'tj_dt_stateId' =>'Tj Dt Statename',
        ];
    }
}
