<?php
use app\widgets\ProductsWidget;
?>

<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Магазин верхней одежды</h1>
        <p class="lead">Лучшие куртки, пальто и пуховики</p>
    </div>

    <div class="body-content">
        <h2>Новинки</h2>
        <?= ProductsWidget::widget(['limit' => 6]) ?>
    </div>
</div>