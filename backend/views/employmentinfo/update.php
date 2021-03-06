<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Employmentinfo */

$this->title = 'Update Employmentinfo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Employmentinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employmentinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
