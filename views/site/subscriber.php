<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Добавить нового абонента</h3>
            <form method="post">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <div class="mb-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Фамилия">
                </div>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <input type="text" name="patronymic" class="form-control" placeholder="Отчество">
                </div>
                <div class="mb-3">
                    <input type="date" name="birthday" class="form-control" placeholder="Дата рождения">
                </div>
                <div class="mb-3">
                    <select name="division_id" class="form-control">
                        <option value="">Выберите отдел</option>
                        <?php foreach ($divisions as $division): ?>
                            <option value="<?= $division->division_id ?>"><?= $division->name_division ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
        