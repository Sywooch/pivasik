<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Typebeer */

$this->title = 'Create Typebeer';
$this->params['breadcrumbs'][] = ['label' => 'Typebeers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typebeer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
