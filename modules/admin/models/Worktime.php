<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "worktime".
 *
 * @property integer $id
 * @property string $timestart
 * @property string $timeend
 *
 * @property Address[] $addresses
 */
class Worktime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worktime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timestart', 'timeend'], 'required'],
            [['timestart', 'timeend'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestart' => 'Timestart',
            'timeend' => 'Timeend',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['time_id' => 'id']);
    }
}
