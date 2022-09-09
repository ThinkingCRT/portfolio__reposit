<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/style.css">
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
               <div class="navigation__nav">
                  <a href="" class="navigation__link nav1">главная</a>
                  <a href="" class="navigation__link nav2">форум</a>
                  <a href="" class="navigation__link nav4">команда</a>
                  <a href="profile.php" class="navigation__link nav6">мой профиль</a>
               </div>
            </nav>
            <div class="inner">
               <h1 class="inner__h1">We Are Awesome Creative Agency</h1>
               <div class="inner__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</div>
               <a class="inner__button" href="">learn more</a>
            </div>
         </div>
      </header>
      <main>
         <section class="wrapper__about">
            <div class="container">
               <div class="about">
                  <img src="assets/images/main__about.png" alt="лого" class="about__img">
                  <div class="about__item">
                     <h2 class="about__h2">Our story</h2>
                     <div class="about__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus <br><br> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                     <a class="about__button" href="">learn more</a>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="wrapper__video">
               <div class="container">
                  <div class="video">
                     <img src="assets/images/main__video__play.png" alt="плэй" class="video__play">
                     <div class="video__text">Watch our story</div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="wrapper__digit">
               <div class="container">
                  <div class="digit">
                     <div class="digit__hp">
                        <h2 class="digit__h2">Expertise</h2>
                        <div class="digit__text">Lorem ipsum dolor sit amet proin gravida nibh vel velit</div>
                     </div>
                     <div class="digit__item">
                        <div class="digit__item1">
                           <img src="assets/images/digit__img1.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2">WEB DESIGN & DEVELOPMENT</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                        <div class="digit__item2">
                           <img src="assets/images/digit__img2.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2 digit__h2__bug">BRANDING IDENTITY</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                        <div class="digit__item3">
                           <img src="assets/images/digit__img3.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2">Mobile app</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                        <div class="digit__item4">
                           <img src="assets/images/digit__img4.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2">SEARCH ENGINE OPTIMIZATION</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                        <div class="digit__item5">
                           <img src="assets/images/digit__img5.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2">GAME DEVELOPMENT</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                        <div class="digit__item6">
                           <img src="assets/images/digit__img6.png" alt="карта" class="digit__img">
                           <h2 class="digit__h2">MADE WITH LOVE</h2>
                           <div class="digit_description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="wrapper__team">
               <div class="container">
                  <div class="team">
                     <div class="team__hp">
                        <h2 class="team__h2">Самая прогрессирующая команда года</h2>
                        <div class="team__text">В 2008 году являлись атрибутами успеха, как и по сей день побив многие рейтинги</div>
                     </div>
                     <div class="team__item">
                        <div class="team__item1">
                           <img src="assets/images/team__img1.png" alt="тима" class="team__img">
                           <h2 class="team__h2">чёкнутый</h2>
                           <div class="team_description">SEO оптимизатор</div>
                        </div>
                        <div class="team__item2">
                           <img src="assets/images/team__img2.png" alt="тима" class="team__img">
                           <h2 class="team__h2">кул бой</h2>
                           <div class="team_description">WEB-программист</div>
                        </div>
                        <div class="team__item3">
                           <img src="assets/images/team__img3.png" alt="тима" class="team__img">
                           <h2 class="team__h2">смотрящий</h2>
                           <div class="team_description">Дизайнер</div>
                        </div>
                        <div class="team__item4">
                           <img src="assets/images/team__img4.png" alt="тима" class="team__img">
                           <h2 class="team__h2">соня</h2>
                           <div class="team_description">Маркетолог</div>
                        </div>
                     </div>
                     <div class="team__botton__cont">
                        <div class="team__description__button">Нажмите на кнопку, чтобы узнать больше о команде</div>
                        <a href="" class="team__button">узнать больше</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="wrapper-form">
               <div class="container">
                  <div class="grid">
                     <div class="form__gride">
                        <h2 class="form__h2">Зайдите в свой профиль</h2>
                        <form action="php/authup.php" method="post" class="form"">
                           <input type=" text" id="login" name="login" value="" placeholder="Логин" class="forms form__login">
                           <input type="password" id="password" name="password" value="" placeholder="Пароль" class="forms form__password">
                           <div class="form__button">
                              <input type="submit" name="connect" id="connect" value="Войти" class="forms form__connect">
                              <input type="submit" name="register" id="register" value="Зарегистрироваться" class="forms form__register">
                           </div>
                        </form>
                        <?php
                        if (isset($_SESSION['massege'])) {
                           echo '<p class="massege"> ' . $_SESSION['massege'] . ' </p>';
                        }
                        unset($_SESSION['massege']);
                        ?>
                     </div>
                     <div class="form__client">
                        <h2 class="form__h2">Наши счастливые клиенты</h2>
                        <div class="images">
                           <div class="form__img1">
                              <img src="assets/images/form__left.png" alt="логи">
                           </div>
                           <div class="form__img2">
                              <img src="assets/images/form__right.png" alt="логи">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <footer>
         <div class="wrapper__footer">
            <div class="container">
               <div class="footer">
                  <div class="footer__col1">
                     <div class="logo">
                        <div class="footer__img">
                           <img src="assets/images/headder__logo.png" alt="лого">
                        </div>
                        <div class="footer__logo">tajam</div>
                     </div>
                     <div class="footer__text">lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit</div>
                     <div class="help">
                        <a href="" class="footer__help">help</a>
                        <a href="" class="footer__help">privacy</a>
                     </div>
                  </div>
                  <div class="footer__col2">
                     <div class="footer__h2">our studio</div>
                     <div class="address">
                        <img src="assets/images/footer__addres.png" alt="икона" class="footer__itema">
                        <div class="footer__address">п-ов Крым, г.Джанкой</div>
                     </div>
                     <div class="tel">
                        <img src="assets/images/footer__phone.png" alt="икона" class="footer__itemt">
                        <div class="footer__tel">+7 (978) 070 34 46</div>
                     </div>
                  </div>
                  <div class="footer__col3">
                     <div class="footer__h2">Social network</div>
                     <div class="footer__social">
                        <img src="assets/images/footer__google.png" alt="соц" class="footer__img">
                        <img src="assets/images/footer__facebook.png" alt="соц" class="footer__img">
                        <img src="assets/images/footer__drible.png" alt="соц" class="footer__img">
                        <img src="assets/images/footer__twitter.png" alt="соц" class="footer__img">
                        <img src="assets/images/footer__youtube.png" alt="соц" class="footer__img">
                        <img src="assets/images/footer__instagram.png" alt="соц" class="footer__img">
                     </div>
                  </div>
                  <div class="footer__copy">© Copyright 2022yer</div>
               </div>
            </div>
         </div>
      </footer>
   </div>
</body>

</html>