<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Academicinfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Academicinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academicinfo-view">

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
            'id',
            'student_id',
            'school_name',
            'type_of_school',
            'school_address',
            'city_or_town',
            'Year_of_completion',
            'currently_enrolled_in_school',
        ],
    ]) ?>

</div>
