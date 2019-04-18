<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sponsorinfo */

$this->title = 'Create Sponsorinfo';
$this->params['breadcrumbs'][] = ['label' => 'Sponsorinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
