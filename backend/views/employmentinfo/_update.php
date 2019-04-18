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
                <div class="panel-heading">Employment Information(list any work experience during the past three weeks)</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-4">
                         <?= $form->field($model, 'employer')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                         <?= $form->field($model, 'job_description')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                         <?= $form->field($model, 'date_of_employment')->textInput(['maxlength' => true]) ?>
                       </div> 
                   </div>
                   
                </div>
            </div>


         </div>
         <div class="form-group">
          <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         </div>
      <?php ActiveForm::end(); ?>
</div>