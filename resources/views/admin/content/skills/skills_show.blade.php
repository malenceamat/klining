@extends('admin.general')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/vanillaSelectBox/vanillaSelectBox.css')}}">
    <link href="{{asset('/src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('/src/plugins/css/light/vanillaSelectBox/custom-vanillaSelectBox.css')}}">
    <link href="{{asset('/src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('/src/plugins/css/dark/vanillaSelectBox/custom-vanillaSelectBox.css')}}">
@endsection
@section('skills_show')
    <div class="row">
        @foreach($skills as $skill)
            <div class="col-sm-3" style="padding: 10px">
                <div class="card">
                    <img src="{{asset('/storage/'. $skill['image'])}}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{$skill['text']}}</h5>
                        <h4 class="card-title mb-3">{{$skill['sub_text']}}</h4>
                    </div>
                    <a href="{{route('skills', ['id' => $skill['id']])}}">
                        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('script')
    <script src="{{asset('/src/assets/js/scrollspyNav.js')}}"></script>
@endsection
