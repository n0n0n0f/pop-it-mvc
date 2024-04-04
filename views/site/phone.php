<h1 class="text-title">Телефоны</h1>
<div class="form-addition" >
    <p class="form-addition-title">Добавить новый номер телефона</p>
    <form class="form-addition-text" method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h4 class="form-addition-title"><?= $message ?? ''; ?></h4>
        <input class="input" type="text" name="phone_number" placeholder="Номер">
        <input type="hidden" name="phone_id" value="...">
        <select name="room_id">
            <?php foreach ($rooms as $room): ?>
                <option value="<?= $room->room_id ?>"><?= $room->number_room ?></option>
            <?php endforeach; ?>
        </select>
        <!-- Добавляем выпадающий список для выбора абонента -->
        <select name="subscriber_id">
            <option value="">Выберите абонента</option>
            <?php foreach ($subscribers as $subscriber): ?>
                <option value="<?= $subscriber->subscriber_id ?>"><?= $subscriber->name . ' ' . $subscriber->lastname ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>