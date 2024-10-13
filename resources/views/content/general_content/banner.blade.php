@if(isset($banner))
<div class="parallax-container" data-parallax-img="{{asset('/storage/'. $banner['image'])}}">
    <div class="parallax-content">
        <div class="jumbotron-custom center context-dark">
            <div class="container">
                <h2 class="txt-shadow">{!! $banner['text'] !!}</h2>
                <a class="btn" href="#contacts">
                    <span>{!! $banner['sub_text'] !!}</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endif
