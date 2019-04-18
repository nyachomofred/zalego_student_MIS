<?php
use yii;
use DateTime;
  use backend\models\Personalinfo;
  use backend\models\Credit;
  use backend\models\Course;
  use backend\models\Campus;
  use backend\Models\Balance;
  use backend\models\Courseapplied;
  use yii\helpers\Url;
  //getting personal informatio

  $personalinfo=Personalinfo::find()->where(['id'=>$model->student_id])->all();
  foreach($personalinfo as $record){
      $fullname=$record['full_name'];
      $email=$record['email'];
      $phonenumber=$record['phone'];
      $campus=$record['campus'];
  }

  //getting course
  $course=Courseapplied::find()->where(['student_id'=>$model->student_id])->all();
  foreach($course as $co){
    $courseaplied=$co['course'];
  }
  //getting begining balance
  $credit=Credit::find()->where(['student_id'=>$model->student_id])->all();
  //geting date
  $time = Date("d/m/Y");


?>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          <img src="<?= Url::to('@web/images/zal.png')?>" style="width:100px; height:70px;">
            <small class="pull-right">Date: <?= $time; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Zalego Institute of Technology</strong><br>
            Devan Plaza,6th Floor, <br>
            Crossway, Nairobi City<br>
            Phone: (+254)723 274774<br>
            Email: info@zalegoinstitute.co.ke
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?= $fullname;?></strong><br>
            Phone: <?= $phonenumber;?><br>
            Email: <?= $email;?><br>
            Course: <?= $courseaplied;?><br>
            Campus: <?= $campus;?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice Zal/000<?= $model->id;?></b><br>
          <br>
          <b>Student  ID:</b> <?=$model->student_id;?><br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Amount paid (ksh)</th>
              <th>Payment mode</th>
              <th>Reference no</th>
              <th>Date paid</th>
              
            </tr>
            </thead>
            <tbody>
            <?php foreach($credit as $credit_record){?>
            <tr>
              <td><?php echo $credit_record['id'];?></td>
              <td><?php echo $credit_record['amount_paid'];?></td>
              <td><?php echo $credit_record['payment_mode'];?></td>
              <td><?php echo $credit_record['reference_no'];?></td>
              <td><?php echo $credit_record['date_paid'];?></td>
            </tr>
            <?php } ?>
           
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="<?= Url::to('@web/images/mpesa.png')?>" style="width:100px;">
          <img src="<?= Url::to('@web/images/barclay.png')?>" style="width:100px;">
          <img src="<?= Url::to('@web/images/zal.png')?>" style="width:100px; height:50px;">
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            <b>NOTE:</b> Balance with (-) sign means overpayment else otherwise
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Initial balance:</th>
                <td>ksh: <?= $model->amount_to_pay;?></td>
              </tr>

              <tr>
                <th>Amount paid</th>
                <td>ksh: <?= $model->amount_paid;?></td>
              </tr>

              <tr>
                <th>Available balance</th>
                <td>ksh: <?= $model->balance;?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->

  
