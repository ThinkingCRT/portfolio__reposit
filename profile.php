<?php
session_start();
if (!$_SESSION['user']) {
   header('Location: index.php');
}

if (isset($_POST['exit'])) {
   unset($_SESSION['user']);
   header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/profile.css">
   <title>Профиль</title>
   <style>
      .navigation .navigation__link.nav4 {
         color: #00e0d0;
         background-position: 0% 100%;
         background-repeat: no-repeat;
         background-size: 0% 2px;
         background-size: 100% 1px;
      }
   </style>
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
               <div class="navigation__nav">
                  <a href="index.php" class="navigation__link nav1">главная</a>
                  <a href="" class="navigation__link nav2">форум</a>
                  <a href="" class="navigation__link nav3">команда</a>
                  <a href="profile.php" class="navigation__link nav4">мой профиль</a>
               </div>
            </nav>
            <div class="profile">
               <img src="<?php echo $_SESSION['user']['avatar'] ?>" width="200px" alt="аватарка">
               <h2 class="profile__ns"><?php echo $_SESSION['user']['surname'] . ' ' ?><?php echo ' ' . $_SESSION['user']['name'] ?></h2>
               <form method="post" class="form">
                  <div class="form__button">
                     <input type="submit" name="exit" id="exit" value="Выйти" class="forms form__disconnect">
                  </div>
               </form>
            </div>
         </div>
      </header>
   </div>
</body>

</html>