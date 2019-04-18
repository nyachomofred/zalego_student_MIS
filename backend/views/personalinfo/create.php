<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Personalinfo */

$this->title = 'Create Personalinfo';
$this->params['breadcrumbs'][] = ['label' => 'Personalinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personalinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'sponsorinfo'=>$sponsorinfo,
        'employerinfo'=>$employerinfo,
        'academicinfo'=>$academicinfo,
        'college'=>$college,
        'employmentinfo'=>$employmentinfo,
        'courseapplied'=>$courseapplied,

    ]) ?>

</div>
