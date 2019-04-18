<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
use backend\models\Personalinfo;
use backend\models\Debit;
?>
<div class="personalinfo">
      <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">

            <div class="panel panel-info">
                <div class="panel-heading">Add new payment</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                           <?= $form->field($model, 'student_id')->dropDownList(
                              ArrayHelper::map(Debit::find()->all(),'student_id','student_id'),['prompt'=>'select....']
                            ) ?>
                       </div>

                       <div class="col-sm-2">
                         <?= $form->field($model, 'amount_paid')->textInput(['maxlength' => true]) ?>
                       </div>

                       <div class="col-sm-2">
                         <?= $form->field($model, 'payment_mode')->textInput(['maxlength' => true]) ?>
                       </div>

                       <div class="col-sm-3">
                         <?= $form->field($model, 'reference_no')->textInput(['maxlength' => true]) ?>
                       </div>

                       <div class="col-sm-3">
                         <?= $form->field($model, 'date_paid')->textInput(['maxlength' => true]) ?>
                       </div>
                   </div>
                </div>
            </div>
         </div>
         <div class="form-group">
          <?= Html::submitButton('add', ['class' => 'btn btn-success']) ?>
         </div>
      <?php ActiveForm::end(); ?>
</div>