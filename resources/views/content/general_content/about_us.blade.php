<section class="well2 bg2 center bg2" id="services">
    <div class="container">
        <h2>Сервисы</h2>
        <ul class="row row-60 icon-list">
            @foreach($services as $service)
                <li class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <img class="" src="{{asset('/storage/'. $service['image'])}}" alt="" style="width: 75%;height: 75%">
                    <h3><p href="l#">{{$service['text']}}</p></h3>
                    <p>{{$service['sub_text']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
