<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrapFormHelpers/js/bootstrap-formhelpers.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./bootstrapFormHelpers/css/bootstrap-formhelpers.min.css">
    <title>Test project</title>

  </head>
  <body>
    <h1>Зарегистрированные пользователи</h1>

    <div class="container">
        <div class="form-group">
            <a class="btn btn-primary" href="/index.php" role="button">Перейти на главную</a>
        </div>
        <div class="form-group">
            <a class="btn btn-primary" href="/file.csv" role="button">Загрузить CSV</a>
        </div>
        <div class="list-group">
            <?php
            if (($fp = fopen("file.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
                    $list[] = $data;
                }
                fclose($fp);
                foreach ($list as $arrays) {
                        echo "<ul class='list-group'>
                        <li class='list-group-item'> <b>Имя:</b> $arrays[0], <b>Фамилия:</b> $arrays[1], 
                        <b>Дата рождения:</b> $arrays[2], <b>Компания:</b> $arrays[3],
                        <b>Должность:</b> $arrays[4], <b>Телефон:</b> $arrays[5]</li>
                    </ul>";
                };
            }
            ?>
        </div>

    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>