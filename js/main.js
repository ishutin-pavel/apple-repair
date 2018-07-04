jQuery(document).ready(function() { 

//Выпадающее меню
jQuery('ul.nav li.dropdown').hover(function() {
	jQuery('.dropdown-menu', this).fadeIn();
}, function() {
	jQuery('.dropdown-menu', this).delay(500).fadeOut('fast');
});

//Одинковая высота
// jQuery('.r1__item').matchHeight();

//Маска для телеофона
jQuery("input[type=tel]").inputmask("+7 (999) 999-99-99");


//Убираем красную обводку у поля телефона при клике на поле
jQuery(".order-form input[name='phone']").on('click', function(event) {
  jQuery(this).css('border', '1px solid gray');
});

//Убираем красную обводку у поля телефона при вводе
jQuery(".order-form input[name='phone']").keypress(function() {
  jQuery(this).css('border', '1px solid gray');
});

//Отправляем форму
jQuery(".order-form").submit(function() {
  var form = jQuery(this);
  var phone = jQuery(this).find('input[name="phone"]');
  var message = jQuery(this).find('.message');
  
  if ( phone.val() == "") {
    message.fadeIn(300).addClass('alert-danger').text('Введите Ваш телефон');
    phone.css('border', '1px solid red').focus();
  } else {
    message.html('Отправляем...');
    jQuery.ajax({
      type: "POST",
      url: "/wp-content/themes/apple/mail.php",
      data: form.serialize(),
      // success: function ( serverAnswer ) { message.text( "Сообщение отправлено: " + serverAnswer ); }
      success: function ( serverAnswer ) {
        message.fadeIn(300).removeClass('alert-danger').addClass('alert-success').text('Сообщение успешно отправлено');
        phone.css('border', '1px solid gray');
      }
    });
  }//if
return false;
});


// Yandex Map
ymaps.ready(init);
var myMap;

function init(){
  myMap = new ymaps.Map("yandex-map", {
      center: [55.671321, 37.276859],
      zoom: 16,
      behaviors: [ 'multiTouch', 'drag' ],//подключаем только перетаскивание и мультикасания для телефона
      controls: ['zoomControl']
  });

  myPlacemark_1 = new ymaps.Placemark([55.671321, 37.276859], {
    hintContent: 'г. Одинцово, Привокзальная площадь, 1А "Одинцовский Пассаж", павильон 10',
    balloonContent: 'г. Одинцово, Привокзальная площадь, 1А "Одинцовский Пассаж", павильон 10',
    iconContent: 'Apple-Well'
    },
    { preset: 'islands#nightStretchyIcon' }
    );

  myMap.geoObjects.add(myPlacemark_1);
  
  
  function checkWidth() {
    var windowSize = jQuery(window).width();
    if (windowSize <= 1199) {
      myMap.behaviors.disable('drag');
      // console.log("Отключили перемещение карты при нажатой левой кнопке мыши либо одиночным касанием");
  
      myMap.behaviors.enable('multiTouch');
      // console.log("Включили масштабирование карты двойным касанием (например, пальцами на сенсорном экране)");
    } else if (windowSize >= 1200) {
        myMap.behaviors.enable('drag');
        // console.log("Включили перемещение карты при нажатой левой кнопке мыши либо одиночным касанием");
      }
  }//checkWidth
  
  // Execute on load
  checkWidth();
  // Bind event listener
  jQuery(window).resize(checkWidth);

}//init


// End Yandex Map

//Owl Carousel
//owl-repair-iphone
jQuery(".owl-repair-iphone").owlCarousel({
  items: 2,
  dots: false,
  loop: false,
  nav: true,
  navClass: ['owl-prev btn btn-primary', 'owl-next btn btn-primary'],
  navText : ['<i class="fa fa-angle-left"></i> Назад','Вперед <i class="fa fa-angle-right"></i>'],
  slideBy: 3,
  margin: 10,
  responsive : {
      480 : {
        items: 3
      },
      768 : {
          items: 4
      },
      978 : {
        items: 6
      },
      1200 : {
        items: 9
      }
  }
});


//owl-repair-ipad
jQuery(".owl-repair-ipad").owlCarousel({
  items: 2,
  dots: false,
  loop: false,
  nav: true,
  navClass: ['owl-prev btn btn-primary', 'owl-next btn btn-primary'],
  navText : ['<i class="fa fa-angle-left"></i> Назад','Вперед <i class="fa fa-angle-right"></i>'],
  slideBy: 3,
  margin: 10,
  responsive : {
      480 : {
        items: 3
      },
      768 : {
          items: 4
      },
      978 : {
        items: 6
      },
      1200 : {
        items: 6
      }
  }
});

//owl-repair-mac
jQuery(".owl-repair-mac").owlCarousel({
  items: 2,
  loop: false,
  margin: 10,
  responsive : {
      480 : {
        items: 3
      }
  }
});
});//ready