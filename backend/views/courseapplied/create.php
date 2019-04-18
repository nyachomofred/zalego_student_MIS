<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Courseapplied */

$this->title = 'Create Courseapplied';
$this->params['breadcrumbs'][] = ['label' => 'Courseapplieds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courseapplied-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
