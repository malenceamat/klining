<!DOCTYPE html>
<html class="wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_prod-20484/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('https://livedemo00.template-help.com/wt_prod-20484/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('https://livedemo00.template-help.com/wt_prod-20484/css/style.css')}}">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=19740619-e89a-44a7-acd7-4003e67c0c19" type="text/javascript"></script>

</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Загрузка...</p>
    </div>
</div>
<div class="page">
    <header class="page-header header-transparent" id="home">
        @include('header')
        @yield('banner')
    </header>
    @yield('content')
</div>
<div class="snackbars" id="form-output-global"></div>
</body>
<script src="{{asset('https://livedemo00.template-help.com/wt_prod-20484/js/core.min.js')}}"></script>
<script src="{{asset('https://livedemo00.template-help.com/wt_prod-20484/js/script.js')}}"></script>
<script type="text/javascript">
  ymaps.ready(init);

  function init() {
      var centerCoords = [61.2536, 73.3962]; // Координаты для "Университетская улица, 4, Сургут"
      var iconUrl = document.querySelector('.yandex-map-container').getAttribute('data-icon');
      var iconActiveUrl = document.querySelector('.yandex-map-container').getAttribute('data-icon-active');

      // Создаем карту
      var map = new ymaps.Map(document.querySelector('.yandex-map'), {
          center: centerCoords,
          zoom: 14,
          controls: ['zoomControl', 'fullscreenControl'], // Включаем управление зумом и полный экран
      });

      // Разрешаем перемещение карты
      map.behaviors.enable('drag');

      // Добавляем метку
      var placemark = new ymaps.Placemark(centerCoords, {
          hintContent: 'Университетская улица, 4, Сургут',
          balloonContent: 'Университетская улица, 4, Сургут'
      }, {
          iconLayout: 'default#image',
          iconImageHref: iconUrl,  // Иконка метки
          iconImageSize: [30, 42],
          iconImageOffset: [-15, -42]
      });

      // Добавляем метку на карту
      map.geoObjects.add(placemark);

      // Изменение иконки при клике
      placemark.events.add('click', function() {
          placemark.options.set('iconImageHref', iconActiveUrl);
      });
  }
</script>
</html>
