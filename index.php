<?php
session_start();
if (isset($_SESSION['user'])){
   header('location: ../profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form action="vendor/signin.php" method="post">

    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>
    </p>
   <?php
   if (isset($_SESSION['message'])) {
      echo '<p class="msg">' . $_SESSION['message'] . '</p>';
   }
   unset($_SESSION['message']);
   ?>
</form>

</body>
</html>


