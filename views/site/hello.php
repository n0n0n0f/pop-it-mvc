<!-- <?php var_dump($divisions); ?> -->
<div class="row mt-5">
<div class="col-md-12">
<h3>Функции для Системного Администратора:</h3>
<ul>
<?php if (app()->auth::checkAdmin()): ?>
<li><a href="<?= app()->route->getUrl('/signup') ?>">Добавление Системного Администратора</a></li>
<?php else: ?>

<div class="table"></div>
<div class="container">
        <h2 class="mt-5">Функции Системного Администратора</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить нового абонента</h3>
                <form method="get" action="<?= app()->route->getUrl('/subscriber') ?>">
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить новый номер телефона</h3>
                <form method="get" action="<?= app()->route->getUrl('/phone') ?>">
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

            </div>
            <div class="col-md-6">
                <h3>Добавить новое помещение</h3>
                <form method="get" action="<?= app()->route->getUrl('/room') ?>">
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить новое подразделение</h3>
                <form method="get" action="<?= app()->route->getUrl('/division') ?>">
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

            </div>
        </div>

    </div>

    <form method="get" action="<?= app()->route->getUrl('/add_functions') ?>">
    <button type="submit" class="btn btn-primary">Функции</button>
</form>
<?php endif; ?>