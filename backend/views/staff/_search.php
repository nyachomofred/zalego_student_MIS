
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
         <?php // echo $form->field($model, 'upload') ?>

         <?php // echo $form->field($model, 'date_uploaded') ?>

         <?php // echo $form->field($model, 'status') ?>

         <?php // echo $form->field($model, 'comment') ?>

        <div class="form-group">
            <div class="row" style="height:20px;"></div>
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?=Html::a('Reset',['index'],['class'=>'btn btn-default']);?>
           
        </div>
       
        <?php ActiveForm::end(); ?>
    </div>
</div>
