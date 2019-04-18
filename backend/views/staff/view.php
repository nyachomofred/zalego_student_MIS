<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

//$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>


<div class="staff-view">
    <section class="content">
        <div class="col-md-6">
    <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="/zalego/backend/web/passpot/<?=$model->passpot ?>" alt="User profile picture">

                    <h3 class="profile-username text-center"><?= $model->name?></h3>


                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Staff id</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phone number</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>National id</b> <a class="pull-right">13,287</a>
                        </li>
                        <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right">13,287</a>
                        </li>
                        <li class="list-group-item">
                            <b>Role</b> <a class="pull-right">13,287</a>
                        </li>
   
</div>




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
    <section>
</div>