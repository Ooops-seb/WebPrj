<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - Movie Max!</title>
    <?php $this->head() ?>
</head>
<body class="body-content d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-expand-md bg-white rounded active',
            'style' => 'top: 3rem; height: 3rem; width: fit-content; margin: auto;',
        ],
    ]);
        
    echo Html::a(
        Html::img('favicon.ico', ['alt' => 'Logo', 'class' => 'logo-image w-25']),
        Yii::$app->homeUrl,
        ['class' => 'navbar-brand']
    );
    
    $menuItems = [
        ['label' => 'Alquiler ', 'url' => ['/alquiler/index']],
        ['label' => 'Peliculas', 'url' => ['/pelicula/index']],
        ['label' => 'Actor', 'url' => ['/actor/index']],
        ['label' => 'Genero', 'url' => ['/genero/index']],
    ];
    
    $dropdownItems = [
        ['label' => 'Actor Pelicula', 'url' => ['/actor-pelicula/index']],
        ['label' => 'Director', 'url' => ['/director/index']],
        ['label' => 'Formato', 'url' => ['/formato/index']],
        ['label' => 'Sexo', 'url' => ['/sexo/index']],
        ['label' => 'Socio', 'url' => ['/socio/index']],
    ];
    
    $menuItems[] = [
        'label' => 'Admin Tools',
        'items' => $dropdownItems,
    ];
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);

    echo Html::beginForm(['pelicula/index'], 'get', ['class' => 'px-5 d-flex', 'role' => 'search']);
    echo Html::input('text', 'PeliculaSearch[PEL_NOMBRE]', Yii::$app->request->get('PeliculaSearch[PEL_NOMBRE]'), [
        'class' => 'form-control me-2',
        'placeholder' => 'Buscar película por nombre',
        'aria-label' => 'Search',
    ]);
    echo Html::submitButton('Buscar', ['class' => 'btn btn-outline-success']);
    echo Html::endForm();
    
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => ['class' => 'bg-dark nav-link'],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="views">
            <?= $content ?>
        </div>
    </div>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
