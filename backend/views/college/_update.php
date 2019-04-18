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
                <div class="panel-heading">Colleges/University</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-3">
                         <?= $form->field($model, 'student_id')->textInput(['maxlength' => true]) ?>
                       </div>

                       <div class="col-sm-3">
                         <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                          <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                       <?= $form->field($model, 'date_attended')->textInput(['maxlength' => true]) ?>
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