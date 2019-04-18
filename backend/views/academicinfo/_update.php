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
                <div class="panel-heading">Academic information</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                       <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($model, 'type_of_school')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'city_or_town')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'Year_of_completion')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'currently_enrolled_in_school')->textInput(['maxlength' => true]) ?>
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