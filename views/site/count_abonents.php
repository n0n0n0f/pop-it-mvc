<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчитать количество абонентов</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE2wVMn46RFY+wj9+T0vJXvOwDO2FgpDlRzZrvJ0p9kGdojDDAl2Z5Z8ZuxbcvmQ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Подсчитать количество абонентов по подразделениям, помещениям</h2>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <label for="division">Подразделение:</label>
                <select class="form-select" id="division">
                    <!-- Ваши варианты подразделений -->
                    <option value="division1">Подразделение 1</option>
                    <option value="division2">Подразделение 2</option>
                    <option value="division3">Подразделение 3</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="room">Помещение:</label>
                <select class="form-select" id="room">
                    <!-- Ваши варианты помещений -->
                    <option value="room1">Помещение 1</option>
                    <option value="room2">Помещение 2</option>
                    <option value="room3">Помещение 3</option>
                </select>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" id="calculateBtn">Посчитать количество абонентов</button>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <h4>Количество абонентов:</h4>
                <p id="result"></p>
            </div>
        </div>
        
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-v1W39jiuZydjN+skApTIjG24NXdRU7nZfQkfe0k13nuUAbtPLqLGmN0bxHEc6tkD" crossorigin="anonymous"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function(){
            // Обработчик события для кнопки "Посчитать количество абонентов"
            $("#calculateBtn").click(function(){
                // Получаем выбранные значения подразделения и помещения
                var division = $("#division").val();
                var room = $("#room").val();
                
                // AJAX-запрос для получения количества абонентов
                $.ajax({
                    url: "count_users.php", // Путь к скрипту для подсчета абонентов
                    type: "POST",
                    data: {division: division, room: room},
                    success: function(response){
                        // Выводим результат подсчета
                        $("#result").text(response);
                    },
                    error: function(xhr, status, error){
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
