<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/register.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;900&display=swap" rel="stylesheet">
   <title>Tajam</title>
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="container">
            <nav class="navigation">
               <div class="navigation__img">
                  <img src="assets/images/headder__logo.png" alt="лого">
               </div>
               <div class="navigation__logo">tajam</div>
            </nav>
            <form method="post" action="php/regup.php" class="form" enctype="multipart/form-data">

               <label class="lable">Фамилия</label>
               <input type="text" name="surname" id="surname" value="" placeholder="Введите фамилию" class="form__input">

               <label class="form__label">Имя</label>
               <input type="text" name="name" id="name " value="" placeholder="Введите имя" class="form__input">

               <label class="form__label">Почта</label>
               <input type="email" name="mail" id="mail " value="" placeholder="Введите эл.почту" class="form__input">

               <label class="form__label">Изображение профиля</label>
               <input type="file" class="form__input" name="avatar">

               <label class="form__label">Логин</label>
               <input type="text" name="login" id="login" value="" placeholder="Введите логин" class="form__input">

               <label class="form__label">Пароль</label>
               <input type="password" name="password" id="password" value="" placeholder="Введите пароль" class="form__input">
               <input type="password" name="password__return" id="password" value="" placeholder="Подтвердите пароль" class="form__input">

               <input type="submit" name="submit" id="submit" value="Зарегистрироваться" class="form__submit form__input">

               <span class="form__text">Если у вас есть аккаунт, <a href="index.php" class="form__auth">авторизируйтесь!</a></span>
            </form>
            <div class="form__massege">
               <?php
               if (isset($_SESSION['massege'])) {
                  echo '<p class="massege"> ' . $_SESSION['massege'] . ' </p>';
               }
               unset($_SESSION['massege']);
               ?>
            </div>
         </div>
      </header>
   </div>
</body>

</html>