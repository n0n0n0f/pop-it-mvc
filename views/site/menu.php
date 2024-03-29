<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Меню</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить нового абонента</h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input type="text" name="surname" class="form-control" id="surname">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="patronymic" class="form-label">Отчество</label>
                        <input type="text" name="patronymic" class="form-control" id="patronymic">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Дата рождения</label>
                        <input type="date" name="birthdate" class="form-control" id="birthdate">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Подразделение</label>
                        <input type="text" name="department" class="form-control" id="department">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Добавить новый телефон</h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Номер телефона</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number">
                    </div>
                    <div class="mb-3">
                        <label for="room" class="form-label">Помещение</label>
                        <input type="text" name="room" class="form-control" id="room">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Добавить новое помещение</h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="room_number" class="form-label">Номер помещения</label>
                        <input type="text" name="room_number" class="form-control" id="room_number">
                    </div>
                    <div class="mb-3">
                        <label for="room_type" class="form-label">Вид помещения</label>
                        <input type="text" name="room_type" class="form-control" id="room_type">
                    </div>
                    <div class="mb-3">
                        <label for="department_room" class="form-label">Подразделение</label>
                        <input type="text" name="department_room" class="form-control" id="department_room">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Добавить новое подразделение</h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="department_name" class="form-label">Название подразделения</label>
                        <input type="text" name="department_name" class="form-control" id="department_name">
                    </div>
                    <div class="mb-3">
                        <label for="department_type" class="form-label">Вид подразделения</label>
                        <input type="text" name="department_type" class="form-control" id="department_type">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Функции для Системного Администратора:</h3>
                <ul>
                    <li><a href="add_admin.php">Добавить нового системного администратора</a></li>
                    <li><a href="add_functions.php">Добавить новых абонентов, помещения, подразделения, новый телефон</a></li>
                    <li><a href="select_numbers.php">Выбрать номера абонента по подразделениям</a></li>
                    <li><a href="select_all_numbers.php">Выбрать все номера абонента</a></li>
                    <li><a href="count_users.php">Подсчитать количество абонентов по подразделениям, помещениям</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>
</body>
</html>
