
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
                <div class="panel-heading">Student Proposal Update</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                       <?= $form->field($model, 'student_id')->textInput() ?>
                       </div>
                       <div class="col-sm-2">
                        <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?> 
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'documentation')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'upload')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'date_uploaded')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'status')->dropdownlist(['Approved'=>'Approved','Not approved'=>'Not approved'],['prompt'=>'select']) ?>
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
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