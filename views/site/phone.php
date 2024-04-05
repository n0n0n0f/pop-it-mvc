<form class="form-addition-text" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input class="input" type="text" name="phone_number" placeholder="Номер">
    <input type="hidden" name="phone_id" value="...">
    <select name="room_id">
        <?php foreach ($rooms as $room): ?>
            <option value="<?= $room->room_id ?>"><?= $room->number_room ?></option>
        <?php endforeach; ?>
    </select>
    <select name="subscriber_id">
        <option value="">Выберите абонента</option>
        <?php foreach ($subscribers as $subscriber): ?>
            <option value="<?= $subscriber->subscriber_id ?>"><?= $subscriber->name . ' ' . $subscriber->lastname ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

<!-- Форма для поиска -->
<div class="form-search">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input class="input" type="text" name="search_query" placeholder="Поиск по имени или фамилии" value="<?= $search_query ?? '' ?>">
        <button type="submit" class="btn btn-primary">Искать</button>
    </form>
</div>

<!-- Вывод результатов поиска -->
<?php if (!empty($search_query) && $subscribers->count() > 0): ?>
    <div class="search-results">
        <h2>Результаты поиска для запроса: <?= $search_query ?></h2>
        <ul>
            <?php foreach ($subscribers as $subscriber): ?>
                <li><?= $subscriber->name . ' ' . $subscriber->lastname ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
