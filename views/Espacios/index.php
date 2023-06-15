<?php

use app\models\Espacios;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EspaciosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Espacios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="espacios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Espacios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDEspacio',
            'Estado',
            'IDVehiculo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Espacios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IDEspacio' => $model->IDEspacio]);
                 }
            ],
        ],
    ]); ?>


</div>
