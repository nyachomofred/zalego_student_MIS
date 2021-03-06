<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Campus */

//$this->title = 'Update Campus: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Campuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campus-update">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_update', [
            'model' => $model,
        ]) ?>
        </div>
    </div>
</div>
