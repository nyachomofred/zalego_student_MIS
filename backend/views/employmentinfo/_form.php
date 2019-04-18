<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employmentinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employmentinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'employer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_employment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
