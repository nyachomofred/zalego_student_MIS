<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Campus */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campus-view">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'campus_code',
                'campus_name',
                'campus_location',
            ],
        ]) ?>
      </div>
    </div>
</div>
