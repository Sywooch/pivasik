<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $brand_id
 * @property string $mark_id
 * @property integer $shop_id
 * @property integer $price
 * @property string $created
 *
 * @property Shop $shop
 * @property Brand $brand
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
            [['brand_id', 'mark_id', 'shop_id', 'price', 'created'], 'required'],
            [['brand_id', 'shop_id', 'price'], 'integer'],
            [['created'], 'safe'],
            [['mark_id'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Бренд',
            'mark_id' => 'Марка',
            'shop_id' => 'Shop ID',
            'price' => 'Price',
            'created' => 'Created',
        ];
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
}
