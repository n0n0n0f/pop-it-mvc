<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции Системного Администратора</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Функции Системного Администратора</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Прикрепить к номеру телефона</h3>
                <form method="get" action="<?= app()->route->getUrl('/attach_abonent') ?>">
    <button type="submit" class="btn btn-primary">Функции</button>
</form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Выбрать номера абонента по подразделениям</h3>
                <form method="get" action="<?= app()->route->getUrl('/select_numbers') ?>">
    <button type="submit" class="btn btn-primary">Функции</button>
</form>

            </div>
            <div class="col-md-6">
                <h3>Выбрать все номера абонента</h3>
                <form method="get" action="<?= app()->route->getUrl('/select_all_numbers') ?>">
    <button type="submit" class="btn btn-primary">Функции</button>
</form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Подсчитать количество абонентов по подразделениям, помещениям</h3>
                <form method="get" action="<?= app()->route->getUrl('/count_abonents') ?>">
    <button type="submit" class="btn btn-primary">Функции</button>
</form>

            </div>
        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>
</body>
</html>
