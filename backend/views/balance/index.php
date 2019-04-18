 <?php
 use backend\models\Debit;
 use backend\models\Credit;
 use backend\models\Balance;
 use yii\helpers\Html;

 //getting total credit
 $total_debit=Balance::find()->sum('amount_to_pay');
 $total_credit=Balance::find()->sum('amount_paid');
 $total_balance=$total_debit-$total_credit;
 
 ?>
 <!-- Info boxes -->
 <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Total Debit</span>
              <span class="info-box-number">ksh: <?=$total_debit;?></span>
              <span class="info-box-number"><?=Html::a('add',['debit/create'],['class'=>'btn btn-sm btn-primary'])?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total credit</span>
              <span class="info-box-number"> ksh: <?= $total_credit;?></span>
              <span class="info-box-number"><?=Html::a('add',['credit/create'],['class'=>'btn btn-sm btn-primary'])?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total balance</span>
              <span class="info-box-number">ksh: <?= $total_balance;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


<?php
use yii\widgets\Pjax;
use kartik\grid\GridView;
//$this->params['breadcrumbs'][] = $this->title;
?>
<?= Yii::$app->session->getFlash('create') ?>
<?= Yii::$app->session->getFlash('update') ?>
<div class="campus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
     <?=
       
        GridView::widget([
        'dataProvider'=> $dataProvider,
        //'filterModel' => $searchModel,
        'columns' =>[
            //'id',
            'student_id',
            'required_amount',
            'amount_to_pay',
            'amount_paid',
            'balance',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Students</h3>',
            'type'=>'success',
            //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add student', ['create'], ['class' => 'btn btn-success']),
           // 'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
            //'footer'=>false
        ],
       
    ]);
     ?>
    <?php Pjax::end(); ?>
</div>