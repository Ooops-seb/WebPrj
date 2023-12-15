<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pelicula;
use app\models\Socio;
use yii\helpers\ArrayHelper; 

/** @var yii\web\View $this */
/** @var app\models\Alquiler $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alquiler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SOC_ID')->dropDownList(
        ArrayHelper::map(Socio::find()->all(), 'SOC_ID', 'SOC_NOMBRE'),
        ['prompt' => 'Seleccione...']
    ) ?>
    
    <?= $form->field($model, 'PEL_ID')->dropDownList(
        ArrayHelper::map(Pelicula::find()->all(), 'PEL_ID', 'PEL_NOMBRE'),
        ['prompt' => 'Seleccione...']
    ) ?>

    <?= $form->field($model, 'ALQ_FECHA_DESDE')->textInput(['type' => 'date', 'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'ALQ_FECHA_HASTA')->textInput(['type' => 'date', 'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'ALQ_VALOR')->textInput(['type' => 'number', 'step' => '0.01', 'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'ALQ_FECHA_ENTREGA')->textInput(['type' => 'date', 'class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
