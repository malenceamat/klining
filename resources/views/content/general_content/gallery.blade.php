<section class="well1 well1_ins center" id="gallery">
    <h2>Галерея</h2>
    <div class="gallery" data-lightgallery="group">
        <div class="gallery-row">
            @foreach($gallery as $gal)
                <div class="block1">
                            <a class="thumb"
                               data-lightgallery="item"
                               href="{{asset('/storage/'. $gal['image'])}}">
                                <img src="{{asset('/storage/'. $gal['image'])}}"
                                    alt="">
                                <span class="thumb_overlay">ZOOM</span>
                            </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
