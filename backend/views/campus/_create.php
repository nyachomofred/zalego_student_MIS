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
                <div class="panel-heading">Add new campus</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-4">
                         <?= $form->field($model, 'campus_code')->textInput(['maxlength' => true]) ?>
                       </div>

                       <div class="col-sm-4">
                       <?= $form->field($model, 'campus_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                       <?= $form->field($model, 'campus_location')->textInput(['maxlength' => true]) ?>
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