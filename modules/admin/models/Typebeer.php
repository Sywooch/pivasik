<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "typebeer".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Product[] $products
 */
class Typebeer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typebeer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Тип',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['typebeer_id' => 'id']);
    }
}
