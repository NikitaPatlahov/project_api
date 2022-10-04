<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Project API</title>
    <script src="/js/form.js"></script>
</head>
<body>
<div class="content">
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="text">
        </div>
        <div>
            <label for="name">ФИО</label>
            <input id="name" name="name" type="text">
        </div>
        <div>
            <label for="age">Возраст</label>
            <input id="age" name="age" type="text">
        </div>
        <div>
            <label for="experience">Стаж работы</label>
            <input id="experience" name="experience" type="text">
        </div>
        <div>
            <label for="photo">Фото</label>
            <input id="photo" name="photo" type="file">
        </div>
        <div>
            <label for="salary">Средняя з/п</label>
            <input id="salary" name="salary" type="text">
        </div>
        <div>
            <input type="submit" value="Добавить">
        </div>
    </form>
</div>
<button id="button">Получить список пользователей</button>
<div id="div">
    <table id="table">
        <thead>
        <th>Email</th>
        <th>ФИО</th>
        <th>Возраст</th>
        <th>Стаж работы</th>
        <th>Фотография</th>
        <th>Средняя з/п</th>
        </thead>
        <tbody>
        <tr></tr>
        </tbody>
    </table>
</div>
</body>
</html>
