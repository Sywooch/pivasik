<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Brand;
use app\modules\admin\models\Mark;
use app\modules\admin\models\Typebeer;
use app\modules\admin\models\Size;
use app\modules\admin\models\Shop;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_id')->textInput() ?>

    <?= $form->field($model,'brand_id')->dropDownList(
        ArrayHelper::map(Brand::find()->all(),'id','name'),
        ['prompt'=>'Выберите бренд']
    ) ?>

    <?= $form->field($model,'mark_id')->dropDownList(
        ArrayHelper::map(Mark::find()->all(),'id','name'),
        ['prompt'=>'Выберите марку']
    ) ?>

    <?= $form->field($model,'typebeer_id')->dropDownList(
        ArrayHelper::map(Typebeer::find()->all(),'id','name'),
        ['prompt'=>'Выберите тип']
    ) ?>

    <?= $form->field($model,'size_id')->dropDownList(
        ArrayHelper::map(Size::find()->all(),'id','volume'),
        ['prompt'=>'Выберите объём']
    ) ?>

    <?= $form->field($model,'shop_id')->dropDownList(
        ArrayHelper::map(Shop::find()->all(),'id','name'),
        ['prompt'=>'Выберите магазин']
    ) ?>


    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
