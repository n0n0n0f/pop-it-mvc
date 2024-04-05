<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Abonents</title>
</head>
<body>
    <h1>Count Abonents</h1>

    <form method="POST">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label for="division_id">Select Division:</label>
        
        <select name="division_id" id="division_id">
            <option value="">-- Select Division --</option>
            <?php foreach ($divisions as $division): ?>
                <option value="<?= $division->division_id ?>"><?= $division->name_division ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Count Division Abonents</button>
    </form>

    <form method="POST">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label for="room_id">Select Room:</label>
        <select name="room_id" id="room_id">
            <option value="">-- Select Room --</option>
            <?php foreach ($rooms as $room): ?>
                <option value="<?= $room->room_id ?>"><?= $room->number_room ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Count Room Abonents</button>
    </form>

    <?php if (!empty($result)): ?>
        <div>
            <?php if (isset($result['division'])): ?>
                <p>Total Abonents in <?= $result['division'] ?> Division: <?= $result['division_count'] ?></p>
            <?php endif; ?>
            <?php if (isset($result['room'])): ?>
                <p>Total Abonents in Room <?= $result['room'] ?>: <?= $result['room_count'] ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
