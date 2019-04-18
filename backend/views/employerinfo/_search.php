<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployerinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employerinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'employer_title') ?>

    <?= $form->field($model, 'employer_name') ?>

    <?= $form->field($model, 'campany_name') ?>

    <?php // echo $form->field($model, 'employer_phone') ?>

    <?php // echo $form->field($model, 'employer_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
