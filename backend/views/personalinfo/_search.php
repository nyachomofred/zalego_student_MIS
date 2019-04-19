<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PersonalinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personalinfo-search">
<div class="row">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'options' => [
                'data-pjax' => 1
            ],
        ]); ?>
        <div class="col-sm-2"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
        <?= $form->field($model, 'globalSearch')->textinput(['placeholder'=>'search..']) ?>
        </div>
        <?php // echo $form->field($model, 'course_period') ?>

        <?php // echo $form->field($model, 'payment_information') ?>

        <?php //echo $form->field($model, 'student_id') ?>

        <?php // echo $form->field($model, 'full_name') ?>

        <?php // echo $form->field($model, 'date_of_birth') ?>

        <?php // echo $form->field($model, 'gender') ?>

        <?php // echo $form->field($model, 'id_no') ?>

        <?php // echo $form->field($model, 'email') ?>

        <?php // echo $form->field($model, 'phone') ?>

        <?php // echo $form->field($model, 'alternate_phone') ?>

        <?php // echo $form->field($model, 'citizenship') ?>

        <?php // echo $form->field($model, 'marital_status') ?>

        <?php // echo $form->field($model, 'future_career') ?>

        <?php // echo $form->field($model, 'physical_address') ?>

        <?php // echo $form->field($model, 'religion') ?>

        <?php // echo $form->field($model, 'medical_condition') ?>

        <div class="form-group">
            <div class="row" style="height:20px;"></div>
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?=Html::a('Reset',['index'],['class'=>'btn btn-default']);?>
           
        </div>
       
        <?php ActiveForm::end(); ?>
    </div>
</div>
