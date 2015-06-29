<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "mark".
 *
 * @property integer $id
 * @property integer $brand_id
 * @property string $name
 * @property string $degree
 *
 * @property Brand $brand
 */
class Mark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'name', 'degree'], 'required'],
            [['brand_id'], 'integer'],
            [['name', 'degree'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'name' => 'Name',
            'degree' => 'Degree',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }
}
