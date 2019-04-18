<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Employerinfo */

//$this->title = 'Update Employerinfo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Employerinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employerinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
