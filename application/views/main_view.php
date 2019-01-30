<script src="/js/ajax.js"></script>
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
      <a class="btn btn-primary" href="/list" role="button">Зарегистрированные пользователи</a>
    </div>