
<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;

?>
<?= Yii::$app->session->getFlash('create') ?>
<?= Yii::$app->session->getFlash('update') ?>
<div class="campus-index">
  <?=$this->params['breadcrumbs'][] = $this->title;?>
    <div class="row">
        <div class="col-sm-0"></div>
        <div class="col-sm-12">
           
            
            <?php Pjax::begin(); ?>
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            <?=
            
                GridView::widget([
                'dataProvider'=> $dataProvider,
                //'filterModel' => $searchModel,
                'columns' =>[
                   // 'id',
                    //'course_period',
                    //'payment_information',
                    //'student_id',
                    'full_name',
                    'date_of_birth',
                    'gender',
                    'id_no',
                    'email:email',
                    'phone',
                   // 'alternate_phone',
                   'citizenship',
                    'marital_status',
                    //'future_career',
                    //'physical_address',
                    'religion',
                    //'medical_condition',
                    ['class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'width: 20%'],
                    'visible'=> Yii::$app->user->isGuest ? false : true,
                    'buttons'=>[
                        'view'=>function ($url) {
                            return Html::a('view', $url, ['class' => 'glyphicon glyphicon-credit-card btn btn-default btn-xs custom_button']);
                        },
                        'update'=>function ($url) {
                            return Html::a('update', $url, ['class' => 'glyphicon glyphicon-pencil btn btn-default btn-xs custom_button']);
                        },
                        
                    
                    ],
                ],
                    //['class' => 'yii\grid\ActionColumn'],
                ],
                'panel' => [
                    'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Students</h3>',
                    'type'=>'success',
                    'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add student', ['create'], ['class' => 'btn btn-success']),
                // 'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                    //'footer'=>false
                ],
            
            ]);
            ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>