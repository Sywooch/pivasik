<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $image_id
 * @property integer $brand_id
 * @property integer $mark_id
 * @property integer $typebeer_id
 * @property integer $size_id
 * @property integer $shop_id
 * @property integer $price
 * @property string $date
 * @property string $created
 *
 * @property Mark $mark
 * @property Shop $shop
 * @property Brand $brand
 * @property Size $size
 * @property Typebeer $typebeer
 * @property Image $image
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'brand_id', 'mark_id', 'typebeer_id', 'size_id', 'shop_id', 'price', 'date', 'created'], 'required'],
            [['image_id', 'brand_id', 'mark_id', 'typebeer_id', 'size_id', 'shop_id', 'price'], 'integer'],
            [['date', 'created'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_id' => 'Image ID',
            'brand_id' => 'Brand ID',
            'mark_id' => 'Mark ID',
            'typebeer_id' => 'Typebeer ID',
            'size_id' => 'Size ID',
            'shop_id' => 'Shop ID',
            'price' => 'Price',
            'date' => 'Date',
            'created' => 'Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMark()
    {
        return $this->hasOne(Mark::className(), ['id' => 'mark_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSize()
    {
        return $this->hasOne(Size::className(), ['id' => 'size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypebeer()
    {
        return $this->hasOne(Typebeer::className(), ['id' => 'typebeer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }
}
