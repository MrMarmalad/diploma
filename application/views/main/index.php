<?php
$menuButtons =
[
  'Вход в систему' => [
    'a' => [
    'href' => '#',
    'data-toggle' => 'modal',
    'data-target' => '#AuthModal',]
  ],
  'Обратиться к администратору' => [
    'a'=> [
    'href' => '#',
    'data-toggle' => 'modal',
    'data-target' => '#writeToAdminModal',]
  ],
  'О программе' => [
    'a' => [
    'href' => '#'
  ]
  ]
]

 ?>


<div class="modal fade" id="AuthModal" tabindex="-1" role="dialog"
aria-labelledby="AuthModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="AuthModalLabel">Войти</h5>
    <button class="close" type="button" data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <form id="modalFormLogin" action="enter" method="post">
              <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login">
              </div>
              <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">
          <div class="text-left">
            <button type="submit" class="btn btn-primary" form="modalFormLogin">
              Войти
            </button>
            <button class="btn btn-secondary "type="button" name="button">
              Забыли логин или пароль
            </button>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="writeToAdminModal" tabindex="-1" role="dialog"
aria-labelledby="AuthModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="writeToAdminModal">Сообщение администратору системы</h5>
    <button class="close" type="button" data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <form id="sendToAdmin" action="enter" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Введите e-mail для обратной связи</label>
                <input type="email" class="form-control" id="emailToAdmin" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="messageToAdmin">Сообщение</label>
                <textarea class="form-control" id="messageToAdmin" rows="3"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">
          <div class="text-left">
            <button type="submit" class="btn btn-primary" form="modalFormLogin">
              Отправить
            </button>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php


?>
<!-- <nav class="navbar navbar-dark bg-primary">
  <a href="#" class="navbar-brand">
    <img src="public/recources/mstucaEmblem.png" width="50" height="65" alt="">
  </a>
  <button class="navbar-toggler" type="button"  data-toggle="collapse"
  data-target="#navbarSupport">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapsenavbar-collapse" id="navbarSupprotedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a href="#" class="nav-link">Home</a>
      </li>
      <li>
        <a href="#" class="nav-link">Home</a>
      </li>
      <li>
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </div>
</nav> -->
<div class="container-fluid">
  <div class="row">
		<div class="col md-10 ml-1 mr-1">

		</div>
	</div>
</div>
