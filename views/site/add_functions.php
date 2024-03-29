<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции Системного Администратора</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Функции Системного Администратора</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить новых абонентов, помещения, подразделения, новый телефон</h3>
                <form method="post" action="add_functions.php">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Выбрать номера абонента по подразделениям</h3>
                <form method="post" action="select_numbers.php">
                    <button type="submit" class="btn btn-primary">Выбрать</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Выбрать все номера абонента</h3>
                <form method="post" action="select_all_numbers.php">
                    <button type="submit" class="btn btn-primary">Выбрать</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Подсчитать количество абонентов по подразделениям, помещениям</h3>
                <form method="post" action="count_users.php">
                    <button type="submit" class="btn btn-primary">Подсчитать</button>
                </form>
            </div>
        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>
</body>
</html>
