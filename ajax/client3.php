<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 3</title>
</head>
<body>
    <p>
        Пусть сервер ожидает три GET параметра с числами, а возвращает сумму этих чисел.
        На клиенте сделайте HTML форму для ввода этих чисел. Сделайте так, чтобы данные формы отправлялись
        через AJAX. После получения ответа сервера запишите этот ответ в какой-нибудь абзац.
    </p>
    <form action="" method="GET" id="form">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="text" name="num3">
        <input type="submit">
    </form>


    <p id="result"></p>
    <script src="ajax3.js"></script>
</body>
</html>

