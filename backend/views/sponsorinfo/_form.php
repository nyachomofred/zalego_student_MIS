<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sponsorinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sponsorinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'sponsor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsor_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsor_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsor_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsor_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
