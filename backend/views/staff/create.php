<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

//$this->title = 'Create Staff';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_create', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
