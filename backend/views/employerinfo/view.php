<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Employerinfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employerinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employerinfo-view">

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
            'employer_title',
            'employer_name',
            'campany_name',
            'employer_phone',
            'employer_email:email',
        ],
    ]) ?>

</div>
