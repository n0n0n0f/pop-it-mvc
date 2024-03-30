<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор номеров абонента по подразделениям</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Выбор номеров абонента по подразделениям</h1>
        <!-- Форма для выбора номеров абонента по подразделениям -->
        <form method="post" action="select_numbers_process.php">
            <div class="form-group">
                <label for="department">Выберите подразделение:</label>
                <select class="form-control" id="department" name="department">
                    <!-- Опции для выбора подразделения -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Показать номера</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
