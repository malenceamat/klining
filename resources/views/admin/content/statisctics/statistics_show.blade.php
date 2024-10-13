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
@section('statistics_show')
    <div class="row">
        @foreach($statistics as $statistic)
            <div class="col-sm-3" style="padding: 10px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{$statistic['text']}}</h5>
                        <h4 class="card-title mb-3">{{$statistic['sub_text']}}</h4>
                    </div>
                    <a href="{{route('statistics', ['id' => $statistic['id']])}}">
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
    <script src="{{asset('/src/plugins/src/vanillaSelectBox/vanillaSelectBox.js')}}"></script>
    <script src="{{asset('/src/plugins/src/vanillaSelectBox/custom-vanillaSelectBox.js')}}"></script>
    <script>
        selectBox3 = new vanillaSelectBox("#multipleSelect", {
            "minWidth": 178,
            "maxHeight": 200,
            "search": true,
            "stayOpen": true
        });
    </script>
@endsection
