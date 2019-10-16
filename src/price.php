<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонтр квартир</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">

</head>
<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo">
          <img src="img/logo.png" alt="Логотип">
        </div>
        <!-- /.navbar__logo -->
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a href="tel:+7(495)42-251-31" class="navbar__phone wow bounceInLeft">+7 (495) 42-251-31</a>
          </div>
          <button class="button navbar__button" id="button">Перезвоните мне</button>
        </div>
        <!-- /.navbar__info -->
      </div>
      <!-- /.navbar-block -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  <main>
    <section class="section price">
      <div class="container">
        <h2 class="section-title price__title wow zoomIn">У нас очень гибкая система скидок на комплексные работы!</h2>
        <!-- /.section-title price__title -->
        <span class="section-subtitle price__subtitle wow zoomIn">Прайс на наши услуги</span>
        <!-- /.section-subtitle price__subtitle -->
        <div class="cards">
          <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
            <div class="card__image"><img class="image__height" src="img/bathroom.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
            <div class="card__image"><img class="image__height" src="img/living.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт комнат и квартир</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
            <div class="card__image"><img class="image__height" src="img/office.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Отделка офисных помещений</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.4s">
            <div class="card__image"><img class="image__height" src="img/buildings.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт в новостройках</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.5s">
            <div class="card__image"><img class="image__height" src="img/kitchen.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт кухонь</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.6s">
            <div class="card__image"><img class="image__height" src="img/house.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт дач и коттеджей</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
        </div class="cards">
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section price -->
  </main>

  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acd351bc3403aa3159d02c20c7ec1ea6acf262b23dd51daa353767026b756d656&amp;
        width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас по всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/map-placeholder.png" alt="">
              </span>
              <span class="contacts-list__text">г. Москва <br> ул. Ленинга, д. 10, <br> корпус 2, оф. 308</span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/clock-with-white-face.png" alt="">
              </span>
              <span class="contacts-list__text">Режим работы: <br> с 9:00 до 18:00</span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/phone-call-button.png" alt="">
              </span>
              <span class="contacts-list__text">Телефон: <br>
                <a href="tel:+7(495)42-251-31" class="contacts-list__phone">+7 (495) 42-251-31</a>
              </span>
            </li>
          </ul>
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
  </footer>
  
  <div class="modal" id="modal">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">&times</button>
      <form action="#" id="modal-form">
        <h3 class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</h3>
        <span class="modal-dialog__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
        <input type="text" autocomplete="off" name="username" required class="input modal-dialog__input" placeholder="Ваше имя">
        <input type="tel" autocomplete="off" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
        <button class="button modal-dialog__button">Узнать стоимость
        </button>
        <span class="modal-dialog__text">Или Вы можете перезвонить нам сами по телефону:
        <a href="tel:+7(495)42-251-31" class="modal-dialog__phone">+7 (495) 42-251-31</a>
        </span>
      </form>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- <script src="js/main.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/modal.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script>
    /* Иннициализация WOW.js */
    new WOW().init();

    $(document).ready(function() {
      /* Валидация формы brif */
      $('#brif-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
            maxlength: 15
          },
          email: {
            required: true,
            email: true
          },
          phone: {
            required: true
          }
        },
        messages: {
          username: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Слишком короткое имя"),
            maxlength: jQuery.validator.format("Слишком длинное имя")
          },
          email: {
            required: "Заполните поле",
            email: "Введите корректный email"
          },
          phone: {
            required: "Заполните поле"
          }
        }
      });
      /* Валидация формы модального окна */
    $('#modal-form').validate({
      rules: {
        username: {
          required: true,
          minlength: 2,
          maxlength: 15
        },
        phone: {
          required: true
        }
      },
      messages: {
        username: {
          required: "Заполните поле",
          minlength: jQuery.validator.format("Слишком короткое имя"),
          maxlength: jQuery.validator.format("Слишком длинное имя")
        },
        phone: {
          required: "Заполните поле"
        }
      }
    });
    /* Валидация формы offer */
    $('#offer-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
            maxlength: 15
          },
          phone: {
            required: true
          }
        },
        messages: {
          username: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Слишком короткое имя"),
            maxlength: jQuery.validator.format("Слишком длинное имя")
          },
          phone: {
            required: "Заполните поле"
          }
        }
      });
     /* Маска для телефона */
      $('.phone').mask('8 (999) 999-99-99');
      /* Скрипт слайдера */
      $('.slider').slick({
        slidesToShow: 3,
        slidslidesToScroll: 1,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>

</body>
</html>