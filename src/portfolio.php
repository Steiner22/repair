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
    <section class="section portfolio">
      <div class="container">
        <h2 class="section-title portfolio__title wow heartBeat">Работая с 2007 года, <br> мы сделали более 500 ремонтов в квартирах и домах</h2>
        <div class="slider">
          <div class="slider__item"><img class="slider__image" src="img/slider-1.jpg" alt=""></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="img/slider-2.jpg" alt=""></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="img/slider-3.jpg" alt=""></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="img/slider-1.jpg" alt=""></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="img/slider-2.jpg" alt=""></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="img/slider-3.jpg" alt=""></div>
          <!-- /.slider__item -->
        </div>
        <div class="arrows portfolio__arrows">
          <div class="arrows__left">
            <img src="img/left-arrow.png" alt="">
          </div>
          <div class="arrows__right">
            <img src="img/right-arrow.png" alt="">
          </div>
        </div>
        <!-- /.slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section portfolio -->
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