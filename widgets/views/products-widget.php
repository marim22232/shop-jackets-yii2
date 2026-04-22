<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($product->name) ?></h5>
                    <p class="card-text">Цена: <?= $product->price ?> ₽</p>
                    <p class="card-text">Размер: <?= $product->size ?></p>
                    <a href="/product/<?= $product->slug ?>" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>