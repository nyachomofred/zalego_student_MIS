<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Course */

//$this->title = 'Update Course: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
