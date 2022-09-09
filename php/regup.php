<?php
session_start();
require_once 'conn.php';

$surname = $_POST["surname"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$login = $_POST["login"];
$password = $_POST["password"];
$password__return = $_POST["password__return"];

if (isset($_POST['submit'])) {
   if (!preg_match('`^[а-яa-z]{1,15}$`usi', $surname)) {
      $error_list[] = "Фамилия заполнена неправильно";
   }

   if (!preg_match('`^[а-яa-z]{1,15}$`usi', $name)) {
      $error_list[] = "Имя заполнено неправильно";
   }

   if (!preg_match('`^(?!.*@.*@.*$)(?!.*@.*--.*\..*$)(?!.*@.*-\..*$)(?!.*@.*-$)((.*)?@.+(\..{1,11})?)$`si', $mail)) {
      $error_list[]  = "Почта заполнена неправильно";
   }

   if (!preg_match('`^[a-z0-9]{6,15}$`usi', $login)) {
      $error_list[] = "Логин заполнен неправильно";
   }

   if (is_numeric($surname)) {
      $error_list[] = "Фамилия не должна содержать цифры";
   }

   if (is_numeric($name)) {
      $error_list[] = "Имя не должно содержать цифры";
   }

   if ($password !== $password__return) {
      $error_list[] = "Пароли не совпадают";
   }

   if (
      preg_match('`^[а-яa-z]{1,15}$`usi', $surname)  && preg_match('`^[а-яa-z]{1,15}$`usi', $name)  &&
      preg_match('`^(?!.*@.*@.*$)(?!.*@.*--.*\..*$)(?!.*@.*-\..*$)(?!.*@.*-$)((.*)?@.+(\..{1,11})?)$`si', $mail) &&
      preg_match('`^[a-z0-9]{6,15}$`usi', $login) && !is_numeric($surname)
      && !is_numeric($name) && $password === $password__return
   ) {
      $password = md5($_POST["password"]);

      $path = "uploads/" . time() . $_FILES['avatar']['name'];
      move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);

      $conn->query("INSERT INTO `pro` (`id`, `surname`, `name`, `email`, `login`, `password`, `avatar`) VALUES (NULL, '$surname', '$name', '$mail', '$login', '$password', '$path')");
      $conn->close();

      header('Location: ../index.php');
   }
}

if (!empty($error_list)) {

   $_SESSION['massege'] = implode('<br>', $error_list);
   header('Location: ../register.php');
}
