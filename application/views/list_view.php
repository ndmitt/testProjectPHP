<h1>Зарегистрированные пользователи</h1>
        <div class="form-group">
            <a class="btn btn-primary" href="/main" role="button">Перейти на главную</a>
        </div>
        <div class="form-group">
            <a class="btn btn-primary" href="/file.csv" role="button">Загрузить CSV</a>
        </div>
        <div class="list-group">
            <?php
                foreach ($data as $arrays) {
                        echo "<ul class='list-group'>
                        <li class='list-group-item'> <b>Имя:</b> $arrays[0], <b>Фамилия:</b> $arrays[1], 
                        <b>Дата рождения:</b> $arrays[2], <b>Компания:</b> $arrays[3],
                        <b>Должность:</b> $arrays[4], <b>Телефон:</b> $arrays[5]</li>
                    </ul>";
                }
                ?>
        </div>