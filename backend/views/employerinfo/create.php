<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employerinfo */

$this->title = 'Create Employerinfo';
$this->params['breadcrumbs'][] = ['label' => 'Employerinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employerinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
