<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BalanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="balance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'globalSearch')->textInput(['placeholder'=>'search......']) ?>

    <?php //echo $form->field($model, 'student_id') ?>

    <?php //echo $form->field($model, 'required_amount') ?>

    <?php //echo $form->field($model, 'amount_to_pay') ?>

    <?php //echo $form->field($model, 'amount_paid') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?=Html::a('Reset',['index'],['class'=>'btn btn-default']);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
