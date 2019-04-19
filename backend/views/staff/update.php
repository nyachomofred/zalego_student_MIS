<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

//$this->title = 'Update Staff: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-update">
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
