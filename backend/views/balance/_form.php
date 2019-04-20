<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="balance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'required_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_to_pay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_paid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
