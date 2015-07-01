<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $id
 * @property integer $image_id
 * @property integer $shop_id
 * @property string $place
 * @property string $latitude
 * @property string $longitude
 * @property integer $time_id
 *
 * @property Worktime $time
 * @property Image $image
 * @property Shop $shop
 * @property Shop[] $shops
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'shop_id', 'place', 'latitude', 'longitude', 'time_id'], 'required'],
            [['image_id', 'shop_id', 'time_id'], 'integer'],
            [['place'], 'string', 'max' => 200],
            [['latitude', 'longitude'], 'string', 'max' => 120]
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
            'shop_id' => 'Shop ID',
            'place' => 'Place',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'time_id' => 'Time ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime()
    {
        return $this->hasOne(Worktime::className(), ['id' => 'time_id']);
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
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShops()
    {
        return $this->hasMany(Shop::className(), ['address_id' => 'id']);
    }
}
