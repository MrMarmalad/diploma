
<?php
$menuButtons =
[
  'О системе' => [
    'a' => [
    'href' => '#'],
  ],
  'Документация' => [
    'a' => [
    'href' => '#'],
  ],
]

?>

<div class="row">
  <div class="col md-10 ml-3 mr-3">
    <form method="post" action='addAdmin'>
      <div class="form-group">
        <label for="login">Логин</label>
        <input type="text" class="form-control" id="loginAdm" name="loginAdm" placeholder="Введите логин">
      </div>
      <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" id="passwordAdm" name="passwordAdm" placeholder="Введите пароль">
      </div>

      <div class="form-group">
        <label for="fio">ФИО</label>
        <input type="text" class="form-control" id="fio" name="fio" placeholder="Введите ФИО">
      </div>
      <button type="submit" class="btn btn-primary">Зарегистрировать нового администратора</button>
    </form>
  </div>
</div>
