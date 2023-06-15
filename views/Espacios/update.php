<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Espacios $model */

$this->title = 'Update Espacios: ' . $model->IDEspacio;
$this->params['breadcrumbs'][] = ['label' => 'Espacios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDEspacio, 'url' => ['view', 'IDEspacio' => $model->IDEspacio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="espacios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
