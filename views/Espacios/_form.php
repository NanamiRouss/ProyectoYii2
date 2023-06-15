<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Espacios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="espacios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDEspacio')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDVehiculo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
