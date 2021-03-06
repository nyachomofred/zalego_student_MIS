
<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Yii::$app->session->getFlash('update') ?>
<div class="campus-index">
    <div class="row">
        <div class="col-sm-0"></div>
        <div class="col-sm-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php Pjax::begin(); ?>
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            <?=
            
                GridView::widget([
                'dataProvider'=> $dataProvider,
                //'filterModel' => $searchModel,
                'columns' =>[
                
                    //'id',
                   // 'student_id',
                   'student.full_name',
                    'project_name',
                    'description:ntext',
                    'documentation:ntext',
                    'upload',
                    'date_uploaded',
                    'status',
                    'comment:ntext',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
                'panel' => [
                    'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Student Project</h3>',
                    'type'=>'success',
                 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add Campus', ['create'], ['class' => 'btn btn-success']),
                // 'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                    //'footer'=>false
                ],
            
            ]);
            ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
