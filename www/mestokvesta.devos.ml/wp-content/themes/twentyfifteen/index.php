<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
wp_enqueue_script( 'wp-api' );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Место Квеста</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/js/scroll.js"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/main.css">
  
<script type="text/template" id="surfboard-template">
  <div style="background: url('<%- backgroundimage %>'); height: 500px; width: 100%; text-align: center;">
    <div><%- text %></div>
    <div><%- htmlcode %></div>
  </div>
</script>
</head>
<body>
  <div id="header">
    <ul class="menu">
      <li><a href="##position-3">Программа</a></li>
      <li><a href="##position-5">Ярославль</a></li>
      <li><a href="##position-6">Организаторы</a></li>
      <li><a href="##position-7">Контакты</a></li>
    </ul>
      <a class="button-buy" href="#">Купить билет</a>
  </div>
  <section id="position-1">
    <div class="main-container">
      <div class="main-logo">
        
      </div>
      <div class="middle-box">
        <div class="first-box">
          Ярославль<br />15-17 сентября
        </div>
        <div class="second-box">
          <div class="image">  
          </div>
          Весь город в игре
        </div>
      </div>
      <div class="info-text">На два дня мы соберём в центре города квесты разных типов и тематик: от исторических и ролевых,
до гастрономических и спортивных</div>
    </div>
  </section>
  <section id="position-2">
    <div class="main-container">
      <div class="header">Почему это круто</div>
      <div class="subheader">Все типы квестов — в одном городе
и в одно время!</div>
      <div class="main-box">
        <div class="panel-box">
          <div class="arrow-yellow"></div>
          <div>Выбери свой
набор игр</div>
        </div>
        <div class="panel-box">
          <div class="arrow-pink"></div>
          <div>Испытай свою команду
и бросить вызов игрокам
со всей России</div>
        </div>
        <div class="panel-box">
          <div class="arrow-blue"></div>
          <div>Взгляни на город
с новых ракурсов</div>
        </div>
      </div>
    </div>
  </section>
  <section id="position-3">
    <div class="main-container">
      <div class="header">Программа</div>
      <div class="header-text">Деловая часть в пятницу, 15 сентября:</div>
      <div class="default-container">
        <div class="mini-box" data-id="1" data-image="bg-programm">
          <div class="image" style='z-index: 1000;background: url("/images/pr-1-1.png") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Ярмарка<br />франшиз
          </div>
          <div class='main-text'>Квесты, сценарии, оборудование и новейшие технологии от авторов и разработчиков.
          </div>
        </div>
        <div class="mini-box-2" data-id="2" data-image="bg-programm2">
          <div class="image" style='z-index: 1000;background: url("/images/pr-2-1.png") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Лекторий
          </div>
          <div class='main-text'>Истории о том, как, кем и для чего создаются квесты в России. Тренды и тенденции развития индустрии.
          </div>
        </div>
    </div>
    <div class="header-text">Игровая часть в субботу и воскресенье, 16 и 17 сентября:</div>
    <div class="game-zone">
        <div class="mini-box" data-id="2" data-image="bg-kvest-1">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-escape.svg") no-repeat 50% 50%;mask: url("/images/qv-escape.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Эскейп-румы 
            <div class="kvest-help">
              Найди выход из комнаты
            </div>
          </div>
          <div class='main-text'>Включи голову и реши головоломку в замкнутом пространстве. Формат знаком, но будет чему удивиться.
          </div>
        </div>
        <div class="mini-box-2" data-id="2" data-image="bg-kvest-2">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-action.svg") no-repeat 50% 50%; mask: url("/images/qv-action.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Экшн-квесты
            <div class="kvest-help">
              Испытай не только мозг, но и тело
            </div>
          </div>
          <div class='main-text'>Решай логические задачи,
напрягай мускулы и разбуди свои
инстинкты. Большие пространства
и ощущение настоящей победы.
          </div>
        </div>
        <div class="mini-box" data-id="2" data-image="bg-kvest-3">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-roleqv.svg") no-repeat 50% 50%; mask: url("/images/qv-roleqv.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Ролевые квесты
            <div class="kvest-help">
              Найди свою роль и стань частью истории
            </div>
          </div>
          <div class='main-text'>Сюжетные игры в кафе и лофтах.
У каждого участника — своя роль,
свои условия победы
          </div>
        </div>
        <div class="mini-box-2" data-id="2" data-image="bg-kvest-4">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-gorq.svg") no-repeat 50% 50%; mask: url("/images/qv-gorq.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Городские квесты
            <div class="kvest-help">
              Старое доброе ориентирование
            </div>
          </div>
          <div class='main-text'>Используй бумажные карты или
мобильные приложения, задействуй
самые необычные виды транспорта
          </div>
        </div>
        <div class="mini-box" data-id="2" data-image="bg-kvest-5">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-qvshadow.svg") no-repeat 50% 50%; mask: url("/images/qv-qvshadow.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Квесты в темноте
            <div class="kvest-help">
              Закрой глаза и доверься городу
            </div>
          </div>
          <div class='main-text'>Сыграй в прятки с завязанными
глазами. Ищи ключи и проходи
лабиринты, ориентируясь на звуки,
запахи, перепады температуры
          </div>
        </div>
        <div class="mini-box-2" data-id="2" data-image="bg-kvest-6">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-vr.svg") no-repeat 50% 50%; mask: url("/images/qv-vr.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            VR-квесты
            <div class="kvest-help">
              Открой другие миры, используя технологии 
            </div>
          </div>
          <div class='main-text'>Очки виртуальной реальности
перенесут тебя в любые точки
времени и пространства.
          </div>
        </div>
        <div class="mini-box" data-id="2" data-image="bg-kvest-7">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-autoq.svg") no-repeat 50% 50%; mask: url("/images/qv-autoq.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Автоквесты
            <div class="kvest-help">
              Испытай максимальный драйв
            </div>
          </div>
          <div class='main-text'>Собери команду, садись за руль
и двигай на «Место Квеста». Сделай
все, чтобы прийти к финишу первым
          </div>
        </div>
        <div class="mini-box-2" data-id="2" data-image="bg-kvest-8">
          <div class="image" style='z-index: 1000;-webkit-mask: url("/images/qv-nightq.svg") no-repeat 50% 50%; mask: url("/images/qv-nightq.svg") no-repeat 50% 50%;'></div>
          <div class='default-text'>
            Ночные квесты
            <div class="kvest-help">
              Ночные квесты. Окунись в ночную жизнь города.
            </div>
          </div>
          <div class='main-text'>Оцени барную карту Ярославля,
магию переулков и загадки в стиле
«хоррор»
          </div>
        </div>
    </div>
  </section>
  <section id="position-4">
    <div class="main-container">
      <form action="">
        <div class="header">Билеты</div>
        <div class="subheader">Скоро мы запустим продажу билетов. Оставьте свою почту, а мы уж позаботимся о том, чтобы вы не пропустили это важное событие.<br /> Подумайте — первые билеты будут дешевле!</div>
        <div class="input-header">Просто оставьте адрес электронной почты и нажмите на кнопку, дальше мы сами.</div>
        <div class="send-email">
          <input type="text" class="ps-email">
          <button class="send-btn">
            Напишите мне
          </button>
        </div>
        <div class='squaredThree'>
          <input type="checkbox" value="None" id="squaredThree" name="check" checked />
          <label for="squaredThree"></label>
          <div class="text-for-lable">
            Если будет ещё что интересное — тоже пишите.
          </div>
        </div>
      </form>
    </div>
  </section>
  <section id="position-5">
    <div class="main-container">
      <div class="header">Ярославль</div>
      <div class="subheader">Ты еще раздумываешь? Ты просто не знаешь, как классно в Ярославле.<br /> Нужны еще причины?</div>
      <div class="agitation">
        <div class="input-email"><button class="send-btn">Найти причины поехать в Ярославль</button></div>
        <div class="input-text">Нажимая на эту кнопку, вы подтверждаете,
что уже почти готовы хорошо провести
выходные</div>
      </div>
      <div class="bg-middle-main">
        <div class="bg-middle"></div>
      </div>
      <div class="header">Как добраться</div>
      <div class="panel">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'moscow')"><span>Из Москвы</span></button>
          <button class="tablinks active" onclick="openCity(event, 'piter')"><span>Из Питера</span></button>
          <button class="tablinks" onclick="openCity(event, 'other')"><span>Откуда угодно</span></button>
        </div>
        <div class="content">
          <div id="moscow" class="tabcontent">
            <h3>Из Москвы</h3>
          </div>

          <div id="piter" class="tabcontent" style="display: flex;">
            <div class="content-tab">
              <div class="icon" style="background: url('/images/airplane.svg') no-repeat 50% 50%; background-size: 550%;"></div>
              <div class="text">Ура! Прямые рейсы из Пулково!
Полтора часа до улётного
веселья на Авиасейлз.</div>
              <div class="button" style="background: url('/images/avia.png') no-repeat 50% 50%;"></div>
            </div>
            <div class="content-tab">
              <div class="icon" style="background: url('/images/train.svg') no-repeat 50% 50%; background-size: 550%;"></div>
              <div class="text">Поезд 337Ж. 17:45 — 7:00. 
Или другие варианты поездов
на Туту.</div>
              <div class="button" style="background: url('/images/tutu.png') no-repeat 50% 50%;"></div>
            </div>
            <div class="content-tab">
              <div class="icon" style="background: url('/images/car.svg') no-repeat 50% 50%; background-size: 550%;"></div>
              <div class="text">12 часов увлекательного
путешествия с попутчиками
от Бипкар.</div>
              <div class="button" style="background: url('/images/bip.png') no-repeat 50% 50%;"></div>
            </div>
          </div>

          <div id="other" class="tabcontent">
            <h3>Откуда угодно</h3>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <section id="position-6">
    <div class="main-container">
      <div class="header">Организаторы</div>
      <div class="organization-box">
        <div class="block-1">
          <div class="image"></div>
          <div class="text-info">Делаем туризм молодежным. Мы организовали фестивали «Ганзейские ночи» и «Ночи над Волгой» и «Весна победы». А ещё мы не спим. Никогда.</div>
        </div>
        <div class="block-2">
          <div class="image"></div>
          <div class="text-info">Исследования туризма и события для молодежи.
Мы проводим фестивали, форумы, турслеты по всей стране. Квесты — это наш образ жизни.  
          </div>
        </div>
      </div>
      <div class="header-partner">Партнёры</div>
      <div class="partners">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
        <img src="/images/gazprom.png" alt="">
      </div>
    </div>
  </section>
  <section id="position-7">
    <div class="main-container">
      <div class="header">Контакты</div>
      <div class="info">
        <ul>
          <li><div class="info-telegram"></div>Телеграм</li>
          <li><div class="info-email"></div>info@mestokvesta.ru</li>
        </ul>
      </div>
      <div class="form-header">Обратная связь</div>
      <form action="">
        <label for="name">Имя*</label><input type="text" id="name">
        <label for="email">Почта (адрес не будет опубликован)*</label><input type="email" id="email">
        <label for="question">Вопрос*</label><textarea id="question"></textarea>
        <button class="send-btn">
          Отправить
        </button>
      </form>
    </div>
  </section>
  <div id="footer">
    <div class="footer-social">
      <ul>
        <li><a href="#" id="social-1">VK</a></li>
        <li><a href="#" id="social-2">FB</a></li>
        <li><a href="#" id="social-3">IG</a></li>
      </ul>
    </div>
    <div class="footer-copy">
      <div>
        © 2017. Фестиваль «Место Квеста»
      </div>
      <div>
        <a class="rule" href="#">Политика конфиденциальности</a>
      </div>
    </div>
  </div>
  <script>
    var strrepl = "";
  $(function() {
    $(".mini-box, .mini-box-2").on('mouseenter', function() {
      var strrepl = "-" + $(this).data('id');
      $(this).html($(this).html().replace(/\-1/,""));
    }).on('mouseleave', function() {
      var strrepl = "-" + $(this).data('id');
      $(this).html($(this).html().replace(strrepl,"-" + $(this).data("id") + "-1"));
    });  
    $(".mini-box, .mini-box-2").on('mouseenter', function() {
      $(this).css("background","url('/images/" + $(this).data('image') + ".png') no-repeat 50% 50%");
    }).on('mouseleave', function() {
      $(this).css("background","none");
    });
  });
  function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "flex";
      evt.currentTarget.className += " active";
  }
  </script>
  <script>
   /* var Person = Backbone.Model.extend({
      defaults: {
        backgroundimage: 'http://www.antigrain.com/research/font_rasterization/adobe_text_rendering.png',
        text: 'The SVG <text> element defines a graphics element consisting of text. Its possible to apply a gradient, pattern, clipping path, mask, or filter to <text>, just like any other SVG graphics element.',
        htmlcode: ''
      }
      });

      var PersonView = Backbone.View.extend({
      tagName: 'div',

      my_template: _.template($('#surfboard-template').html()),

      initialize: function(){
        this.render();
      },

      render: function(){
        this.$el.html( this.my_template(this.model.toJSON()));
      }
    });

    // calls from console

    var person = new Person;
    var personView = new PersonView({ model: person });
    $(document.body).html(personView.el);  // this is not ideal but good enough for demo.*/
  </script>
</body>
</html>