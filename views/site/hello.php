<div class="row mt-5">
    <div class="col-md-12">
        <h3>Функции для Системного Администратора:</h3>
        <ul>
            <?php if (app()->auth::checkAdmin()): ?>
                <li><a href="<?= app()->route->getUrl('/signup') ?>">Добавление Системного Администратора</a></li>
            <?php else: ?>
                <div class="container">
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
            <li><a href="<?= app()->route->getUrl('/add_functions') ?>">Функции</a></li>
        </div>
            <?php endif; ?>
        </ul>
    </div>
</div>