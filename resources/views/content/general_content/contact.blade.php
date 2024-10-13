<section class="map" id="contacts">
    <a class="trig fa-remove" href=""></a>
    <div class="yandex-map-container"
         data-center="Университетская улица, 4, Сургут"
         data-zoom="14"
         data-icon="images/yandex_marker.png"
         data-icon-active="images/yandex_marker_active.png">
        <div class="yandex-map" style="width:100%;height:400px;"></div>
    </div>
    <div class="well1 contacts center" id="form">
        <h2>Контакты</h2>
        <ul class="list-inline">
            <li><a class="phone-icon" href="tel:#">{{$contact['number']}}</a></li>
        </ul>
        <address>{{$contact['address']}}</address>
    </div>
</section>

<!-- Подключение скрипта Яндекс Карт -->

<!-- Скрипт для инициализации карты -->

