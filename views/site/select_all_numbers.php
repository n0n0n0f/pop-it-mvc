<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список абонентов и их номера</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Список абонентов и их номера</h2>
        <ul class="list-group mt-3">
            <!-- Примеры абонентов, замените их на данные из вашей базы данных -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Абонент 1
                <button class="btn btn-primary" onclick="toggleNumbers('numbers1')">Показать номера</button>
            </li>
            <div id="numbers1" style="display:none;">
                <p>Номера абонента 1: <input type="text" value="номера абонента 1"></p>
            </div>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Абонент 2
                <button class="btn btn-primary" onclick="toggleNumbers('numbers2')">Показать номера</button>
            </li>
            <div id="numbers2" style="display:none;">
                <p>Номера абонента 2: <input type="text" value="номера абонента 2"></p>
            </div>
            <!-- Здесь добавьте абонентов из вашей базы данных -->
        </ul>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>

    <script>
        function toggleNumbers(divId) {
            var div = document.getElementById(divId);
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>
</body>
</html>
