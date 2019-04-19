
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

                  
                      
                       <?= $form->field($model, 'passpot')->fileInput([]) ?>
                      
                      
                       <?= $form->field($model, 'staff_id')->textInput(['maxlength' => true]) ?>   
                      
                      
                       <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                      
                       
                       <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                      
                      
                       <?= $form->field($model, 'national_id')->textInput(['maxlength' => true]) ?>
                       
                       
                       <?= $form->field($model, 'gender')->dropdownlist(['Male'=>'Male','Female'=>'Female'],['prompt'=>'select']) ?>
                      
                      
                       <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>
                      
                  
                </div>
            </div>

         </div>
         <div class="form-group">
          <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         </div>
      <?php ActiveForm::end(); ?>
</div>