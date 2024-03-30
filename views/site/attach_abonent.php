<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прикрепление абонента к номеру телефона</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Прикрепление абонента к номеру телефона</h1>
        <!-- Форма для прикрепления абонента -->
        <form method="post" action="attach_abonent_process.php">
            <div class="form-group">
                <label for="abonent_name">Имя абонента:</label>
                <input type="text" class="form-control" id="abonent_name" name="abonent_name" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Номер телефона:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Прикрепить</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
