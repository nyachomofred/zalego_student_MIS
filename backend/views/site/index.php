
<?php
use yii\helpers\Url;
 use backend\models\Campus;
 use backend\models\Course;
 use backend\models\Staff;
 use backend\models\Personalinfo;
 use backend\models\Balance;


 //getting total registered courses
 $total_course=Course::find()->count();
 //geting total campuses
 $total_campuses=Campus::find()->count();
 //getting total staff
 $total_staff=Staff::find()->count();
 //geting total registered student
 $total_student=personalinfo::find()->count();
 //get total debited student
 $debited_student=Balance::find()->count();
 //getting total debit
 //total credit
 $total_credit=Balance::find()->sum('amount_paid');
 //getting total debit
 $total_debit=Balance::find()->sum('amount_to_pay');
 //getting total balance
 $total_balance=Balance::find()->sum('balance');
?>
    <section class="content-header">;
      <h1>
        Admin Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $total_student?></h3>

              <p>Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/zalego/backend/web/index.php?r=personalinfo" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $total_staff?><sup style="font-size: 20px"></sup></h3>

              <p>Staff</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/zalego/backend/web/index?r=staff" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $total_course?></h3>

              <p>Courses</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/zalego/backend/web/index?r=course" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $total_course?></h3>

              <p>Campuses</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/zalego/backend/web/index?r=campus" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
      <div class="row" style="height:300px;">
         <div class="col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="<?= Url::to('@web/images/zalego.jpeg')?>" alt="logo" style="width:200px;height:150px;"></div>
                <div class="panel-body">
                 <h6 class="card-title">Debited Student</h6>
                 <p class="card-text"><?= $debited_student?></p>
                 <a href="/zalego/backend/web/index?r=balance" class="btn btn-primary">More</a>
                </div>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="<?= Url::to('@web/images/zalego.jpeg')?>" alt="logo" style="width:200px;height:150px;"></div>
                <div class="panel-body">
                 <h6 class="card-title">Total Debit</h6>
                 <p class="card-text">Ksh:<?= $total_debit?></p>
                 <a href="/zalego/backend/web/index?r=balance" class="btn btn-primary">More</a>
                </div>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="<?= Url::to('@web/images/zalego.jpeg')?>" alt="logo" style="width:200px;height:150px;"></div>
                <div class="panel-body">
                 <h6 class="card-title">Total Credit</h6>
                 <p class="card-text">Ksh:<?= $total_credit?></p>
                 <a href="/zalego/backend/web/index?r=balance" class="btn btn-primary">More</a>
                </div>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="<?= Url::to('@web/images/zalego.jpeg')?>" alt="logo" style="width:200px;height:150px;"></div>
                <div class="panel-body">
                 <h6 class="card-title">Total Balance</h6>
                 <p class="card-text">Ksh:<?= $total_balance?></p>
                 <a href="/zalego/backend/web/index?r=balance" class="btn btn-primary">More</a>
                </div>
            </div>
         </div>
         
         
      </div>
      
    </section>
   
 
  <div class="control-sidebar-bg"></div>


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
