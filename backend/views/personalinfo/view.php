<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

use backend\models\Personalinfo;
use backend\models\Sponsorinfo;
use backend\models\Employerinfo;
use backend\models\Academicinfo;
use backend\models\College;
use backend\models\Employmentinfo;
use backend\models\Courseapplied;


//geting record from sponsor information table
$sponsor=Sponsorinfo::find()->where(['student_id'=>$model->id])->all();
foreach($sponsor as $record){
   $spon=$record['sponsor'];
   $sponsor_title=$record['sponsor_title'];
   $sponsor_name=$record['sponsor_name'];
   $sponsor_phone=$record['sponsor_phone'];
   $sponsor_email=$record['sponsor_email'];
   $sponsor_address=$record['sponsor_address'];
}
//getting record from employer information table

$employer=Employerinfo::find()->where(['student_id'=>$model->id])->all();
foreach($employer as $employer_record){
   $employer_title=$employer_record['employer_title'];
   $employer_name=$employer_record['employer_name'];
   $campany_name=$employer_record['campany_name'];
   $employer_phone=$employer_record['employer_phone'];
   $employer_email=$employer_record['employer_email'];
  
}
//getting data from accademic table
$academic=Academicinfo::find()->where(['student_id'=>$model->id])->all();
foreach($academic as $academic_record){
$schoolname=$academic_record['school_name'];
$school_type=$academic_record['type_of_school'];
$schooladdress=$academic_record['school_address'];
$school_city=$academic_record['city_or_town'];
$completionyear=$academic_record['Year_of_completion'];
$enrolled=$academic_record['currently_enrolled_in_school'];
}

//geting data from employment table
$employmentinfo=Employmentinfo::find()->where(['student_id'=>$model->id])->all();
foreach($employmentinfo as $employmentinfo_record){
  $employer=$employmentinfo_record['employer'];
  $jobdescription=$employmentinfo_record['job_description'];
  $employmentdate=$employmentinfo_record['date_of_employment'];

}
//get data from college or university
$collage=College::find()->where(['student_id'=>$model->id])->all();
foreach($collage as $collage_record){
  $schoolname=$collage_record['school_name'];
  $course=$collage_record['course'];
  $date=$collage_record['date_attended'];
}

//getting records from course
$courseapplied= Courseapplied::find()->where(['student_id'=>$model->id])->all();
foreach($courseapplied as $course_record){
  $studentcourse=$course_record['course'];

}

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personalinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="personalinfo-view">
<section class="content">

<div class="row">
  <div class="col-md-4">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?= Url::to('@web/images/admin.png')?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?= $model->full_name?></h3>

        <p class="text-muted text-center">Software Engineer</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Student id</b> <a class="pull-right"><?= $model->student_id;?></a>
          </li>
          <li class="list-group-item">
            <b>Course period</b> <a class="pull-right"><?= $model->course_period;?></a>
          </li>
          <li class="list-group-item">
            <b>Payment information</b> <a class="pull-right"><?= $model->payment_information;?></a>
          </li>
          <li class="list-group-item">
            <b>Date of birth</b> <a class="pull-right"><?= $model->date_of_birth;?></a>
          </li>
          <li class="list-group-item">
            <b>Gender</b> <a class="pull-right"><?= $model->gender;?></a>
          </li>
          <li class="list-group-item">
            <b>ID/Birth certificate no</b> <a class="pull-right"><?= $model->id_no;?></a>
          </li>
          <li class="list-group-item">
            <b>Email address</b> <a class="pull-right"><?= $model->email;?></a>
          </li>
          <li class="list-group-item">
            <b>Phonenumber</b> <a class="pull-right"><?= $model->phone;?></a>
          </li>
          <li class="list-group-item">
            <b>Alternate phonenumber</b> <a class="pull-right"><?= $model->alternate_phone;?></a>
          </li>
          <li class="list-group-item">
            <b>Citizenship</b> <a class="pull-right"><?= $model->citizenship;?></a>
          </li>
          <li class="list-group-item">
            <b>Marital Status</b> <a class="pull-right"><?= $model->marital_status;?></a>
          </li>
          <li class="list-group-item">
            <b>Future Career</b> <a class="pull-right"><?= $model->future_career;?></a>
          </li>
          <li class="list-group-item">
            <b>Physical Address</b> <a class="pull-right"><?= $model->physical_address;?></a>
          </li>
          <li class="list-group-item">
            <b>Religion</b> <a class="pull-right"><?= $model->religion;?></a>
          </li>
          <li class="list-group-item">
            <b>Medical conditions</b> <a class="pull-right"><?= $model->medical_condition;?></a>
          </li>
        </ul>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

   
  </div>
  <!-- /.col -->
  <div class="col-md-8">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">More information</a></li>
        
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
          <!-- Post -->
          <div class="post">
            <div class="user-block">
                  <span class="username">
                    <a href="#">Sponsor information.</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
            </div>
            <!-- /.user-block -->
            <p>
            <table class="table table-striped table-bordered">
                  <tr>
                    <th>Sponsor</th>
                    <th>Sponsor title</th>
                    <th>Sponsor name</th>
                    <th>Sponsor phone</th>
                    <th>Sponsor email</th>
                    <th>Sponsor address</th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                    <td><?php echo $spon?></td>
                    <td><?php echo $sponsor_title?></td>
                    <td><?php echo $sponsor_name?></td>
                    <td><?php echo $sponsor_phone?></td>
                    <td><?php echo $sponsor_email?></td>
                    <td><?php echo $sponsor_address?></td>
                    <td> <?= Html::a('Update', ['/sponsorinfo/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?><td>
                  </tbody>
              </table>
            </p>
            
          </div>
          <!-- /.post -->

          <!-- Post -->
          <div class="post clearfix">
            <div class="user-block">
             
                  <span class="username">
                    <a href="#">Employer information(immediate contact suppervisor)</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
      
            </div>
            <!-- /.user-block -->
            <p>
            <table class="table table-striped table-bordered">
                  <tr>
                    <th>Campany name</th>
                    <th>Employer title</th>
                    <th>Employer name</th>
                    <th>Employer phone</th>
                    <th>Employer email</th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                    <td><?php echo $campany_name?></td>
                    <td><?php echo $employer_title?></td>
                    <td><?php echo $employer_name?></td>
                    <td><?php echo $employer_phone?></td>
                    <td><?php echo $employer_email?></td>
                    <td><?= Html::a('Update', ['employerinfo/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?></td>
                  </tbody>
              </table>
            </p>
          </div>
          <!-- /.post -->

          <!-- Post -->
          <div class="post">
            <div class="user-block">
              
                  <span class="username">
                    <a href="#">Academic information</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
              
            </div>
           <P>
           <table class="table table-striped table-bordered">
                  <tr>
                    <th>School name</th>
                    <th>Type of school</th>
                    <th>School address</th>
                    <th>City or town</th>
                    <th>Year of completion</th>
                    <th>Currently enrolled in school</th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                    <td><?php echo $schoolname?></td>
                    <td><?php echo $school_type?></td>
                    <td><?php echo $schooladdress?></td>
                    <td><?php echo $school_city?></td>
                    <td><?php echo $completionyear?></td>
                    <td><?php echo $enrolled?></td>
                    <td><?= Html::a('Update', ['academicinfo/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?></td>
                  </tbody>
              </table>
           </p>
        </div>

        <div class="post">
            <div class="user-block">
              
                  <span class="username">
                    <a href="#">College/University</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
              
            </div>
           <P>
           <table class="table table-striped table-bordered">
                  <tr>
                    <th>School name</th>
                    <th>Course</th>
                    <th>Date Attended</th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                    <td><?php echo $schoolname?></td>
                    <td><?php echo $course?></td>
                    <td><?php echo $date?></td>
                    <td><?= Html::a('Update', ['college/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?></td>
                  </tbody>
              </table>
           </p>
        </div>

        <div class="post">
            <div class="user-block">
              
                  <span class="username">
                    <a href="#">Employment information</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
              
            </div>
           <P>
           <table class="table table-striped table-bordered">
                  <tr>
                    <th>Employer</th>
                    <th>Job description</th>
                    <th>Date of employment</th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                    <td><?php echo $employer?></td>
                    <td><?php echo $jobdescription?></td>
                    <td><?php echo $employmentdate?></td>
                    <td><?= Html::a('Update', ['employmentinfo/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?></td>
                  </tbody>
              </table>
           </p>
        </div>
       
        <div class="post">
            <div class="user-block">
              
                  <span class="username">
                    <a href="#">Course applied for</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
              
            </div>
           <P>
             <table class="table table-striped table-bordered">
                 <thead>
                    <tr>
                        <th>Course applied</th>
                        <th>action</th>
                    </tr>
                 </thead>
                 <tbody>
                  <tr>
                      <td> <?php echo $studentcourse;?></td>
                      <td><?= Html::a('Update', ['courseapplied/update', 'id' => $model->id], ['class' => 'btn btn-primary btn-block']) ?></td>
                  </tr>
                 </tbody>
             </table>
            
           </p>
        </div>

        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>
</div>
