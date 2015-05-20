<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tj_job_main_category".
 *
 * @property integer $tj_jmc_id
 * @property string $tj_jmc_name
 * @property string $tj_jmc_added_date
 * @property integer $tj_jmc_added_by
 * @property integer $tj_jmc_modified_by
 * @property string $tj_jmc_modified_date
 */
class JobMainCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tj_job_main_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tj_jmc_name', 'tj_jmc_added_date', 'tj_jmc_added_by', 'tj_jmc_modified_by', 'tj_jmc_modified_date'], 'required'],
            [['tj_jmc_added_date', 'tj_jmc_modified_date'], 'safe'],
            [['tj_jmc_added_by', 'tj_jmc_modified_by'], 'integer'],
            [['tj_jmc_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tj_jmc_id' => 'Tj Jmc ID',
            'tj_jmc_name' => 'Tj Jmc Name',
            'tj_jmc_added_date' => 'Tj Jmc Added Date',
            'tj_jmc_added_by' => 'Tj Jmc Added By',
            'tj_jmc_modified_by' => 'Tj Jmc Modified By',
            'tj_jmc_modified_date' => 'Tj Jmc Modified Date',
        ];
    }
}
