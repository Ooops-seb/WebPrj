<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Alquiler $model */

$this->title = $model->sOC->SOC_NOMBRE;
$this->params['breadcrumbs'][] = ['label' => 'Alquilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alquiler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ALQ_ID' => $model->ALQ_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ALQ_ID' => $model->ALQ_ID], [
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
            [
                'label' => 'Socio',
                'value' => ($model->sOC ? $model->sOC->SOC_NOMBRE: 'N/A'),
            ],
            [
                'label' => 'Pelicula',
                'value' => ($model->pEL ? $model->pEL->PEL_NOMBRE: 'N/A'),
            ],
            'ALQ_FECHA_DESDE',
            'ALQ_FECHA_HASTA',
            'ALQ_VALOR',
            'ALQ_FECHA_ENTREGA',
        ],
    ]) ?>

</div>
