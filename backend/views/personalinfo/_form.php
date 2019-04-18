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
                <div class="panel-heading">I am applying for course period begining</div>
                <div class="panel-body"><?= $form->field($model, 'course_period')->dropdownList(['Evening classes'=>'Evening classes','full time classes'=>'full time classes'],['prompt'=>'select']) ?></div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Are you self sponsored,if not who is sponsoring you,tick appropriate</div>
                <div class="panel-body"><?= $form->field($model, 'payment_information')->dropdownList(['Self sponsored'=>'Self sponsored','Parent/Guardian'=>'Parent/Guardian','Relative'=>'Relative','Employer'=>'Employer'],['prompt'=>'select']) ?></div>
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
                         <?= $form->field($model,'date_of_birth')->widget(
                            DatePicker::className(),[
                               'inline'=>false,
                              // 'template'=>'<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
                               'clientOptions'=>[
                                  'autoclose'=>true,
                                  'format'=>'dd-M-yyyy'
                               ]
                            ]
                         );?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($model, 'gender')->dropdownlist(['Male'=>'Male','Female'=>'Female'],['prompt'=>'select...']) ?>
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
                          <?= $form->field($model, 'marital_status')->dropdownlist(['Maried'=>'Maried','Single'=>'Single'],['prompt'=>'please select....']) ?>
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
                          <?= $form->field($model, 'religion')->dropdownlist([
                             'Judaism'=>'Judaism',
                             'Christianity'=>'Christianity',
                             'Islam'=>'Islam',
                             'Hinduism'=>'Hinduism',
                             'Buddhism'=>'Buddhism',
                          ],['prompt'=>'please select']) ?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($model, 'medical_condition')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                           <?= $form->field($model, 'campus')->dropdownList([
                              'Westland Campus'=>'Westland Campus',
                              'Jkuat Juja Campus'=>'Jkuat Juja Campus',
                              'Laikipia Nakuru Campus'=>'Laikipia Nakuru Campus',
                           ],['prompt'=>'select..........']) ?>
                       </div>
                       <div class="col-sm-2">
                           <?= $form->field($model, 'intake')->dropdownlist([
                              'Jan-May'=>'Jan-May',
                              'May-Aug'=>'May-Aug',
                              'Aug-Oct'=>'Aug-Oct',
                              'Oct-Dec'=>'Oct-Dec',
                           ],['prompt'=>'select..']) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($model, 'level')->dropdownlist([
                             'Basic Level'=>'Basic Level',
                             'Standard Level'=>'Standard Level',
                             'Advanced Level'=>'Advanced Level',
                          ],['prompt'=>'select']) ?>
                       </div>
                   </div>


                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Sponsor information ((if not self)</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                         <?= $form->field($sponsorinfo, 'sponsor')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-1">
                          <?= $form->field($sponsorinfo, 'sponsor_title')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-3">
                          <?= $form->field($sponsorinfo, 'sponsor_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($sponsorinfo, 'sponsor_address')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($sponsorinfo, 'sponsor_phone')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($sponsorinfo, 'sponsor_email')->textInput(['maxlength' => true]) ?>
                       </div>
                   </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Employer information ((Immediate contact supervisor)</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                         <?= $form->field($employerinfo, 'employer_title')->textInput(['maxlength' => true]) ?> 
                       </div>
                       <div class="col-sm-4">
                           <?= $form->field($employerinfo, 'employer_name')->textInput(['maxlength' => true]) ?>      
                       </div>
                       <div class="col-sm-2">
                       <?= $form->field($employerinfo, 'campany_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($employerinfo, 'employer_phone')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($employerinfo, 'employer_email')->textInput(['maxlength' => true]) ?>
                       </div>
                   </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Academic information</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-2">
                       <?= $form->field($academicinfo, 'school_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($academicinfo, 'type_of_school')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                         <?= $form->field($academicinfo, 'school_address')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($academicinfo, 'city_or_town')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($academicinfo, 'Year_of_completion')->dropdownlist([
                               '2019'=>'2019',
                               '2020'=>'2020',
                               '2021'=>'2021',
                               '2022'=>'2022',
                               '2023'=>'2023',
                               '2024'=>'2024',
                               '2025'=>'2025',
                               '2026'=>'2026',
                               '2027'=>'2027',
                               '2028'=>'2028',
                               '2029'=>'2029',
                               '2030'=>'2030',
                          ],['prompt'=>'select']) ?>
                       </div>
                       <div class="col-sm-2">
                          <?= $form->field($academicinfo, 'currently_enrolled_in_school')->dropdownlist([
                              'Yes'=>'Yes',
                               'No'=>'No',
                          ],['prompt'=>'select']) ?>
                       </div>
                   </div>
                </div>
            </div>
          

            <div class="panel panel-info">
                <div class="panel-heading">Colleges/University</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-4">
                         <?= $form->field($college, 'school_name')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                          <?= $form->field($college, 'course')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                       <?= $form->field($college,'date_attended')->widget(
                            DatePicker::className(),[
                               'inline'=>false,
                              // 'template'=>'<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
                               'clientOptions'=>[
                                  'autoclose'=>true,
                                  'format'=>'dd-M-yyyy'
                               ]
                            ]
                         );?>
                       </div>
                       
                   </div>
                </div>
            </div>
            
            <div class="panel panel-info">
                <div class="panel-heading">Employment Information(list any work experience during the past three weeks)</div>
                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-4">
                         <?= $form->field($employmentinfo, 'employer')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                         <?= $form->field($employmentinfo, 'job_description')->textInput(['maxlength' => true]) ?>
                       </div>
                       <div class="col-sm-4">
                         <?= $form->field($employmentinfo,'date_of_employment')->widget(
                            DatePicker::className(),[
                               'inline'=>false,
                              // 'template'=>'<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
                               'clientOptions'=>[
                                  'autoclose'=>true,
                                  'format'=>'dd-M-yyyy'
                               ]
                            ]
                         );?>
                       </div>
                       
                   </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Course applied</div>
                <div class="panel-body">

                   <div class="row">
                   <?= $form->field($courseapplied, 'course')->checkboxList(ArrayHelper::map(Course::find()->all(),'course_name','course_name')) ?>
                  
                   </div>
                </div>
            </div>

         </div>
         <div class="form-group">
          <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         </div>
      <?php ActiveForm::end(); ?>
</div>