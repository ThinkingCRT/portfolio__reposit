<?php
session_start();
require_once 'conn.php';

$login = $_POST["login"];
$password = md5($_POST["password"]);
if (isset($_POST['register'])) {
   header('Location: ../register.php');
}

$check_user = $conn->query("SELECT * FROM `pro` WHERE `login` = '$login' AND `password` = '$password'"); // запрос на выполнение условий их таблицы
if (isset($_POST['connect'])) {
   if ($check_user->num_rows > 0) {                                                                           // валидация данных
      $user = $check_user->fetch_assoc();                                                                     // преобразование в нормальный массив

      $_SESSION['user'] = [
         "id" => $user['id'],
         "surname" => $user['surname'],
         "name" => $user['name'],
         "email" => $user['email'],
         "avatar" => $user['avatar']
      ];
      header('Location: ../profile.php');
   } else {
      $_SESSION['massege'] = 'Неверный логин или пароль';
      header('Location: ../index.php');
   }
}
$check_user->close();
