<section class="well1 center bg1 " id="offer"><a class="" href="#services" data-custom-scroll-to="services"></a>
    <div class="container">
        <h2 class="white">Что мы предлагаем</h2>
        <div class="row row-50">
            @foreach($skills as $skill)
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".4s">
                <img class="circle" src="{{asset('/storage/'. $skill['image'])}}" alt="" style="width: 75%;height: 75%">
                <h3 class="white">
                    <a class="hov1" href="#">{{$skill['text']}}</a>
                </h3>
                <p class="white">{{$skill['sub_text']}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
