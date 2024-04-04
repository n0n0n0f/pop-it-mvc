<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Subscriber</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Выберите абонента</h2>
        <form class="mt-3" method="post" action="/select_all_numbers">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <div class="mb-3">
                <label for="subscriber">Выберите абонента:</label>
                <select class="form-select" id="subscriber" name="subscriber_id">
                    <option value="">Выберите абонента</option>
                    <?php foreach ($subscribers as $subscriber): ?>
                        <option value="<?= $subscriber->id ?>"><?= $subscriber->name . ' ' . $subscriber->lastname ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Подтвердить</button>
        </form>

        <!-- Display phone numbers here after confirmation -->
        <?php if (!empty($selectedSubscriber)): ?>
            <h2 class="mt-5">Номера абонента <?= $selectedSubscriber->name . ' ' . $selectedSubscriber->lastname ?>:</h2>
            <ul class="list-group mt-3">
                <?php foreach ($selectedSubscriber->phones as $phone): ?>
                    <li class="list-group-item"><?= $phone->phone_number ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>
</body>
</html>
