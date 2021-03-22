<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>AJAX 2</title>
</head>
<body>
    <div class="row">
        <div class="container col-12">
            <h4>Тренировка</h4>
            <p id='p1'></p>
            <label for="num">Введите число:</label>
            <input type="text" name="" id="num">
            <div id="result"></div>
            <input type="submit" id='button'>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="container col-12">
            <h4>Упражнение 1</h4>
            <p>На клиенте дана кнопка и абзац. Пусть сервер возвращает квадратный 
            корень переданного GET параметром числа числа. 
            <p>По нажатию на кнопку передайте на сервер GET параметром 
            какое-нибудь число. После ответа сервера выведите переданные данные в вашем абзаце.</p>
            </p>
            <p>Упражнение 2. Модифицируйте предыдущую задачу так, чтобы передаваемое число задавалось в инпуте. </p>
            <label for="num1">Введите число:</label>
            <input type="text" id="num1">
            <input type="submit" value="Запрос 1" id="btn1">
            <p id="res1"></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="container col-12">
        <h4>Упражнение 2</h4>
            <p>Пусть сервер ожидает три GET параметра с числами, а возвращает сумму этих чисел. Сделайте на клиенте 3 инпута для ввода чисел и кнопку. По нажатию на кнопку отправьте содержимое инпутов на сервер, а после ответа сервера результат выведите в какой-нибудь абзац. </p>
            <div><label for="num21">Первое число: <input type="text" id='num21' style='width:50px'>
            <label for="num22">Второе число: <input type="text" id='num22' style='width:50px'>
            <label for="num23">Третье число: <input type="text" id='num23' style='width:50px'>
            <input type="submit" value="отправить запрос" id='btn2'></div>
            <p id="out2"></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="container col-12">
            <h4>Упражнение 3</h4>
            <p> Пусть на сервере дан массив. Пусть сервер ожидает, что GET параметром будет передано число, и возвращает элемент массива, соответствующий этому числу. 
                Пусть на клиенте даны инпут, кнопка и абзац. Пусть в инпут вводится число.
                По нажатию на кнопку передайте на сервер GET параметром введенное число, а после ответа сервера выведите в абзац ответ сервера. </p>
                <label for="num3">Введите число: <input type="text" id="num3">
                <input type="submit" value="отправить запрос" id="btn3">
                <p id="out3"></p>
            <p>Модифицируйте предыдущую задачу так, чтобы вместо абзаца был список ul. Сделайте так, чтобы каждый новый ответ сервера записывался в новую li тега ul. </p>
            <ul id='out4'></ul>
        </div>
        <hr>
    </div>


    <script src="ajax2.js"></script>
</body>
</html>