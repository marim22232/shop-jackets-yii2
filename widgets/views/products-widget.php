<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?php if ($product->image): ?>
                    <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
                <?php else: ?>
                 <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($product->name) ?></h5>
                    <p class="card-text text-primary fw-bold"><?= number_format($product->price, 0, '', ' ') ?> ₽</p>
                    <p class="card-text">Размер: <?= $product->size ?: 'Не указан' ?></p>
                    <a href="/index.php?r=product/view&slug=<?= $product->slug ?>" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>