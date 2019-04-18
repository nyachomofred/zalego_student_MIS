<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="campus-search" style="height:2px;">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php //echo $form->field($model, 'id') ?>

    <?php //echo $form->field($model, 'campus_code') ?>

    <?php //echo $form->field($model, 'campus_name') ?>

    <?php //echo $form->field($model, 'campus_location') ?>

    <div class="form-group">
        <?php //echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php //echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <div class="row">
        <div class="col-sm-2">
           <?= $form->field($model, 'campus_code') ?>
        </div>
        <div class="col-sm-2">
            <div class="row" style="height:22px;"></div>
            <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
            </div>
        </div>
        <div class="col-sm-8"></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
