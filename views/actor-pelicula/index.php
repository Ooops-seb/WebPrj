<?php

use app\models\ActorPelicula;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ActorPeliculaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Actor Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Actor Pelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        [
            'attribute' => 'ACT_ID',
            'value' => function ($model) {
                return $model->aCT->ACT_NOMBRE; 
            },
        ],
        [
            'attribute' => 'PEL_ID',
            'value' => function ($model) {
                return $model->pEL->PEL_NOMBRE; 
            },
        ],
        'APL_PAPEL',
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, ActorPelicula $model, $key, $index, $column) {
                return Url::toRoute([$action, 'APL_ID' => $model->APL_ID]);
            },
        ],
    ],
]); ?>



</div>
