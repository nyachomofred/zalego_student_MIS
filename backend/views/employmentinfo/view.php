<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Employmentinfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employmentinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employmentinfo-view">

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
            'employer',
            'job_description',
            'date_of_employment',
        ],
    ]) ?>

</div>
