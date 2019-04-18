<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employerinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employerinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'employer_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campany_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employer_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employer_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
