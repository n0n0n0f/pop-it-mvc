<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Numbers</title>
</head>
<body>
    <h2>Select Numbers by Division</h2>
    <form class="form-addition-text" method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h4 class="form-addition-title"><?= $message ?? ''; ?></h4>
        <select name="division_id" id="division">
            <option value="">Select Division</option>
            <?php foreach ($divisions as $division): ?>
                <option value="<?php echo $division->division_id; ?>"><?php echo $division->name_division; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($subscribers)): ?>
        <h2>Subscribers:</h2>
        <ul>
            <?php foreach ($subscribers as $subscriber): ?>
                <li><?= $subscriber->name . ' ' . $subscriber->lastname; ?>:</li>
                <ul>
                    <?php if (isset($phonesBySubscriber[$subscriber->subscriber_id])): ?>
                        <?php foreach ($phonesBySubscriber[$subscriber->subscriber_id] as $phone_number): ?>
                            <li><?= $phone_number; ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
