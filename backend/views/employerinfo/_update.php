<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
?>
<div class="personalinfo">
      <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">

            <div class="panel panel-info">
                <div class="panel-heading">Employer information ((Immediate contact supervisor)</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                         <?= $form->field($model, 'employer_title')->textInput(['maxlength' => true]) ?> 
                       </div>
                       <div class="col-sm-4">
                           <?= $form->field($model, 'employer_name')->textInput(['maxlength' => true]) ?>      
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'campany_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'employer_phone')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'employer_email')->textInput(['maxlength' => true]) ?>
                       </div>
                   </div>
                </div>
            </div>
         </div>
         <div class="form-group">
          <?= Html::submitButton('update', ['class' => 'btn btn-success']) ?>
         </div>
      <?php ActiveForm::end(); ?>
</div>