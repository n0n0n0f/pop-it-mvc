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
        <select name="subscriber_id" id="subscriber">
            <option value="">Select Division</option>
            <?php foreach ($subscribers as $subscriber): ?>
                <option value="<?php echo $subscriber->subscriber_id; ?>"><?php echo $subscriber->name; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($subscribers)): ?>
        <h2>Subscribers:</h2>
        <ul>
            <?php foreach ($subscribers as $subscriber): ?>
                
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
