<?php
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Inicio';
?>

<section class="d-flex flex-row justify-content-center align-items-center mt-50">
<div class="w-50 mx-5 bg-info text-white rounded-lg">
    <h3 class="p-2 text-center" style="font-weight: bold;">
        Películas
    </h3>
    <?php if (empty($peliculas)): ?>
        <div class="alert alert-warning m-3" role="alert">
            No hay películas disponibles en este momento.
        </div>
    <?php else: ?>

        <!-- /** #TODO Tabla responsive */ -->
        <table class="table table-dark table-hover">
            <thead style="font-weight: bold;">
                <tr class="table-active">
                    <th scope="col">#</th>
                    <th scope="col">Película</th>
                    <th scope="col">Fecha Estreno</th>
                    <th scope="col">Costo ($)</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                <?php foreach ($peliculas as $index => $pelicula): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $pelicula->PEL_NOMBRE ?></td>
                        <td><?= $pelicula->PEL_FECHA_ESTRENO ?></td>
                        <td>$ <?= $pelicula->PEL_COSTO ?></td>
                        <td>
                            <?= Html::a('Ver', ['pelicula/view', 'PEL_ID' => $pelicula->PEL_ID], ['class' => 'btn btn-primary']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

    <div class="w-50 mx-5 bg-info text-white rounded-lg">
        <h3 class="p-2 text-center" style="font-weight: bold;">
            Películas Recomendadas
        </h3>
        <?php if (empty($peliculas)): ?>
            <div class="alert alert-warning m-3" role="alert">
                No hay películas disponibles en este momento.
            </div>
        <?php else: ?>
            <table class="table table-dark table-hover">
                <thead style="font-weight: bold;">
                    <tr class="table-active">
                        <th scope="col">#</th>
                        <th scope="col">Película</th>
                        <th scope="col">Fecha Estreno</th>
                        <th scope="col">Costo ($)</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peliculasRecomendadas as $index => $pelicula): ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $pelicula->PEL_NOMBRE ?></td>
                            <td><?= $pelicula->PEL_FECHA_ESTRENO ?></td>
                            <td>$ <?= $pelicula->PEL_COSTO ?></td>
                            <td>
                                <?= Html::a('Ver', ['pelicula/view', 'PEL_ID' => $pelicula->PEL_ID], ['class' => 'btn btn-primary']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</section>