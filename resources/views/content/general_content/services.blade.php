<section class="well" id="advantages">
    <div class="container">
        <ul class="row row-30 index-list list-advantages">
            @foreach($advantages as $advantage)
                <li class="col-lg-6 wow fadeInUp" data-wow-delay="0s">
                    <div class="list-item-content">
                        <h3><p>{{$advantage['text']}}</p></h3>
                        <p>{{$advantage['sub_text']}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
