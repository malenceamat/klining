@extends('admin.general')
@section('style')
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />
@endsection
@section('statistics')
    <div class="profile-image">
        <form @if (isset($statistics->id)) action="{{route('statistics_edit')}}" @else action="{{route('statistics_create')}}" @endif method="POST" enctype="multipart/form-data" id="save">
            @csrf
            @if($statistics->id)
                @method('POST')
            @endif
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="container">
                            <div class="form">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Основной заголовок</label>
                                            <input id="text" type="number" name="text" value="{{$statistics['text']}}"
                                                   placeholder="Основной заголовок" class="form-control">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="sub_text">Дополнительный текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Дополнительный текст"
                                                   id="sub_text" name="sub_text"
                                                   value="{{$statistics['sub_text']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$statistics['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($statistics->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Редактировать</button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                </div>
            @endif
        </form>
        @if(isset($statistics->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="{{route('delete_statistics', ['id' => $statistics['id']])}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить</button>
                </form>
            </div>
        @endif
    </div>
@endsection
