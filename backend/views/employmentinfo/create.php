<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employmentinfo */

$this->title = 'Create Employmentinfo';
$this->params['breadcrumbs'][] = ['label' => 'Employmentinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employmentinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
