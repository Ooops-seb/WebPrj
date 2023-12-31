<?php

use app\models\Genero;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\GeneroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Genéros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Genéro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GEN_NOMBRE',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Genero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'GEN_ID' => $model->GEN_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
