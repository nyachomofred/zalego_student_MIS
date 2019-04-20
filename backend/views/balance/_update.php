<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
use backend\models\Personalinfo;
?>
<div class="personalinfo">
      <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">update student debit</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-4">
                       <?= $form->field($model, 'student_id')->dropDownList(
									ArrayHelper::map(Personalinfo::find()->all(),'id','full_name'),['prompt'=>'select....']
								) ?>
                       </div>
                       <div class="col-sm-4">
                       <?= $form->field($model, 'required_amount')->textInput(['maxlength' => true]) ?>    
                       </div>
                       <div class="col-sm-4">
                       <?= $form->field($model, 'amount_to_pay')->textInput(['maxlength' => true]) ?>
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