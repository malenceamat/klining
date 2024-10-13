<section class="well-md bg2 text-center">
    <div class="container">
        <div class="row row-30">
            @foreach($statistics as $statistic)
                <div class="col-sm-6 col-md-3">
                <article class="box-counter">
                    <div class="box-counter-main">
                        <div class="counter">{{$statistic['text']}}</div>
                    </div>
                    <div class="box-counter-divider"></div>
                    <p class="box-counter-title">{{$statistic['sub_text']}}</p>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
