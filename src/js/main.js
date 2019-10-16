var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');

button.addEventListener('click', function() {
  modal.classList.add('modal_active');
  });

  close.addEventListener('click', function() {
    modal.classList.remove('modal_active');
  });




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

$('#offer-form').on('submit', function name(event) {
  event.preventDefault();
  
  $.ajax({
    type: "POST",
    url: "mail.php",
    data: $(this).serialize(),
    success: function (response) {
      console.log('Прибыли данные: ' + response);
      $('#offer-form')[0].reset();
      $('#offer-message').text(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error(jqXHR + " " + textStatus);
    }
  });
})

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