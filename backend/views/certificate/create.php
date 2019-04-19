<?php

use yii\helpers\Html;


//$this->title = 'Create Certificate';
$this->params['breadcrumbs'][] = ['label' => 'Certificates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificate-create">
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
