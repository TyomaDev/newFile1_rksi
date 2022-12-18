
<?php

session_start();
require_once 'include/connect.php';

?>


<section>
<form class="signup_form" method="POST" action="php/view/pages/include/register.php" enctype="multipart/form-data">
      <Label>Фио</Label>
      <input type="text" name="full_name" placeholder="Введите полное имя">
      <label>Логин</label>
      <input type="text" name="login" placeholder="Введите логин">
      <label>Почта</label>
      <input type="email"  name="email" placeholder="Введите почту">
      <label>Изображение профиля</label>
      <input type="file" name="avatar" placeholder="Добавте изображение профиля, не обзательно">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите логин">
      <label>Подтверждение</label>
      <input type="password" name="password_confirm" placeholder="Введите логин">
<p>Выберете отдел</p> <button type="submit">Войти</button>
      <select name="otdel" >
        <option value="Комерческий">Комерческий</option>
        <option value="Финансовый">Финансовый</option>
        <option value="Маркединговый">Маркединговый</option>
        </select>

      
     </form>
<div>
<p>   
<?php 
if (isset($_SESSION['message1'])){
      echo '<p>'. $_SESSION['message1'].'</p>';
}

unset($_SESSION['message1']);

?>
</p>
</div>
</section>