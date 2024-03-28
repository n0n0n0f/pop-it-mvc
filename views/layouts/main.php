<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pop it MVC</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="container">
           <a class="navbar-brand" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <?php if (!app()->auth::check()): ?>
                       <li class="nav-item">
                           <a class="nav-link" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
                       </li>
                   <?php else: ?>
                       <li class="nav-item">
                           <a class="nav-link" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
                       </li>
                   <?php endif; ?>
               </ul>
           </div>
       </div>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
