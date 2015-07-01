<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "size".
 *
 * @property integer $id
 * @property string $volume
 *
 * @property Product[] $products
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volume'], 'required'],
            [['volume'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'volume' => 'Volume',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['size_id' => 'id']);
    }
}
