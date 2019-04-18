<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Debit */

$this->title = 'Update Debit: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Debits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="debit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
