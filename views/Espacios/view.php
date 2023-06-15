<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Espacios $model */

$this->title = $model->IDEspacio;
$this->params['breadcrumbs'][] = ['label' => 'Espacios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="espacios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IDEspacio' => $model->IDEspacio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IDEspacio' => $model->IDEspacio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDEspacio',
            'Estado',
            'IDVehiculo',
        ],
    ]) ?>

</div>
