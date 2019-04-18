<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Academicinfo */

$this->title = 'Create Academicinfo';
$this->params['breadcrumbs'][] = ['label' => 'Academicinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academicinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
