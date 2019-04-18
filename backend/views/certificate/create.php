<?php

use yii\helpers\Html;


//$this->title = 'Create Certificate';
$this->params['breadcrumbs'][] = ['label' => 'Certificates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_create', [
        'model' => $model,
    ]) ?>

</div>
