<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\VehiculosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="vehiculos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDVehiculo') ?>

    <?= $form->field($model, 'IDCliente') ?>

    <?= $form->field($model, 'Marca') ?>

    <?= $form->field($model, 'Modelo') ?>

    <?= $form->field($model, 'Placa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
