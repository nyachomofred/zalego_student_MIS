
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
?>
<div class="personalinfo">
      <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">Add new staff</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                       <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                       <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'course_level')->dropdownlist(['Basic Level'=>'Basic level','Advanced level'=>'Advanced level','Standard level'=>'Standard level'],['prompt'=>'select']) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'course_duration')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                      
                       <?= $form->field($model, 'course_description')->textarea(array('rows'=>2,'cols'=>5)); ?>
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
