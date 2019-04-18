

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\Personalinfo;
?>
<div class="personalinfo">
      <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">certificate</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-3">
                       <?= $form->field($model, 'student_id')->dropDownList(
                              ArrayHelper::map(Personalinfo::find()->all(),'id','full_name'),['prompt'=>'select....']
                            ) ?>
                       </div>
                       <div class="col-sm-3">
                       <?= $form->field($model, 'certificate_no')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                       <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                       <?= $form->field($model, 'date_collected')->textInput(['maxlength' => true]) ?>
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