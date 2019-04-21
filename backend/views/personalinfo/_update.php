<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Course;
use yii\helpers\ArrayHelper;
?>
<div class="update">
     <?php $form = ActiveForm::begin(); ?>
         <div class="panel-group">
            <div class="panel panel-info">
                    <div class="panel-heading">I am applying for course period begining</div>
                    <div class="panel-body"><?= $form->field($model, 'course_period')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">Are you self sponsored,if not who is sponsoring you,tick appropriate</div>
                    <div class="panel-body"><?= $form->field($model, 'payment_information')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">Peronal information</div>
                    <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-2">
                            <?= $form->field($model, 'student_id')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'date_of_birth')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'id_no')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-sm-2">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                        <?= $form->field($model, 'alternate_phone')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'citizenship')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'marital_status')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'future_career')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <?= $form->field($model, 'physical_address')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'medical_condition')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
         </div>
         <div class="form-group">
            <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
         </div>
     <?php ActiveForm::end(); ?>

</div>