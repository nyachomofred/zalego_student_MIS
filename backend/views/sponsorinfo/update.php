<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sponsorinfo */

$this->title = 'Update Sponsorinfo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Sponsorinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sponsorinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
