
<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
$this->params['breadcrumbs'][] = $this->title;
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
           
            'id',
            'student_id',
            'project_name',
            'description',
            'documentation',
            'upload',
            'date_uploaded',
            'status',
            'comment',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Student Project</h3>',
            'type'=>'success',
           // 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add Campus', ['create'], ['class' => 'btn btn-success']),
           // 'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
            //'footer'=>false
        ],
       
    ]);
     ?>
    <?php Pjax::end(); ?>
</div>
