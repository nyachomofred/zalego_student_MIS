<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Course */

//$this->title = 'Create Course';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">
    <div class="row">
        <div class="col-sm-0"></div>
        <div class="col-sm-12">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
      </div>
    </div>
</div>
