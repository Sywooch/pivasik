<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "mark".
 *
 * @property integer $id
 * @property integer $image_id
 * @property string $name
 * @property string $degree
 *
 * @property Brand[] $brands
 * @property Image $image
 * @property Product[] $products
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
            [['image_id', 'name', 'degree'], 'required'],
            [['image_id'], 'integer'],
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
            'image_id' => 'Изображание',
            'name' => 'Марка',
            'degree' => 'Градус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasMany(Brand::className(), ['mark_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['mark_id' => 'id']);
    }
}
