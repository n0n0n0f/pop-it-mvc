<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Регистрация нового пользователя</h2>
<pre><?= $message ?? ''; ?></pre>
<form method="post">
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <label>Имя <input type="text" name="name"></label>
   <label>Логин <input type="text" name="login"></label>
   <label>Пароль <input type="password" name="password"></label>
   <button>Зарегистрироваться</button>
</form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPL
