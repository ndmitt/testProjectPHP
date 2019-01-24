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
    <script src="ajax.js"></script>
    <title>Test project</title>

  </head>
  <body>
    <div class="container">
      <h1>Test project</h1>
    <form class="form-horizontal" method="post" id="ajax_form" action="">
      <div class="form-group">
        <label for="inputFirstName" class="col-xs-2 control-label">Имя:</label>
        <div class="col-xs-10">
          <input type="text" class="form-control" name="inputFirstName" placeholder="Введите имя">
        </div>
      </div>
      <div class="form-group">
        <label for="inputLastName" class="col-xs-2 control-label">Фамилия:</label>
        <div class="col-xs-10">
          <input type="text" class="form-control" name="inputLastName" placeholder="Введите фамилию">
        </div>
      </div>
      <div class="form-group">
        <label for="inputDate" class="col-xs-2 control-label">Дата рождения:</label>
        <div class="col-xs-10">
          <input type="date" class="form-control" name="inputDate" placeholder="Введите дату рождения">
        </div>
      </div>
      <div class="form-group">
        <label for="inputCompany" class="col-xs-2 control-label">Компания:</label>
        <div class="col-xs-10">
          <input type="text" class="form-control" name="inputCompany" placeholder="Название компании">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAppointment" class="col-xs-2 control-label">Должность:</label>
        <div class="col-xs-10">
          <input type="text" class="form-control" name="inputAppointment" placeholder="Ваша должность">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPhone" class="col-xs-2 control-label">Телефон:</label>
        <div class="col-xs-10">
          <input type="text" class="form-control bfh-phone" name="inputPhone" data-format="+7 (ddd) ddd-dddd">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
          <button type="submit" class="btn btn-info" id="btn">Отправить</button>
        </div>
      </div>
    </form>
    <div id="result_form"></div>
    <div class="col-xs-offset-2 col-xs-10">
      <a class="btn btn-primary" href="/list.php" role="button">Зарегистрированные пользователи</a>
    </div>
  </div>
  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>