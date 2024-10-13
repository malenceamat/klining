@if(isset($about))
<section class="section well-md bg-white" id="about">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6 col-xl-5">
                <a class="mfp-link video-cover"
                   style="background-image: url('{{asset('/storage/'. $about['image'])}}');"
                   data-lightbox="iframe"
                   href="{{asset('/storage/'. $about['image'])}}">
                </a>
            </div>
            <div class="col-lg-6 offset-xl-1">
                <h2>{{$about['header']}}</h2>
                <p> {!! $about['text'] !!}</p>
                <a class="btn btn-sm" href="#">
                    <span>{{$about['sub_text']}}</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
