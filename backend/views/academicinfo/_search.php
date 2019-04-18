<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AcademicinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academicinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'type_of_school') ?>

    <?= $form->field($model, 'school_address') ?>

    <?php // echo $form->field($model, 'city_or_town') ?>

    <?php // echo $form->field($model, 'Year_of_completion') ?>

    <?php // echo $form->field($model, 'currently_enrolled_in_school') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
