<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <form action="handler.php" enctype="multipart/form-data" method="POST">

        <p>Загрузить картинку<br>
            <input type="file" name="user_image">
        </p>
        <p>Загрузить водяной знак<br>
            <input type="file" name="user_watermark">
        </p>

        <p><input type="submit" value="Отправить" name="send">
            <input type="reset" value="Очистить">
    </form>
</body>
</html>