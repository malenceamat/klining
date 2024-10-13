@extends('admin.general')
@section('style')
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />
@endsection
@section('services')
    <div class="profile-image">
        <form @if (isset($services->id)) action="{{route('services_edit')}}" @else action="{{route('services_create')}}" @endif method="POST" enctype="multipart/form-data" id="save">
            @csrf
            @if($services->id)
                @method('POST')
            @endif
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-10 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value="{{$services['image']}}"
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$services['image'])}}"
                             class="col-lg-6 col-sm-12 pl-0">
                        <input id="croppie-input" type="file" style="color: #3b3f5c"
                               class="form-control-file d-block mt-3">
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-3 pl-0">
                        <div class="itn-croppie" style="display: none"></div>
                        <div class="col-12 pl-0">
                            <a id="itn-croppie-save" class="btn btn-dark" style="display: none">Обрезать</a>
                        </div>
                    </div>
                </div>
            </div>

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
                                            <input id="text" type="text" name="text" value="{{$services['text']}}"
                                                   placeholder="Основной заголовок" class="form-control">

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="sub_text">Дополнительный текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Дополнительный текст"
                                                   id="sub_text" name="sub_text"
                                                   value="{{$services['sub_text']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$services['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($services->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Редактировать</button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                </div>
            @endif
        </form>
        @if(isset($services->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="{{route('delete_services', ['id' => $services['id']])}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить</button>
                </form>
            </div>
        @endif
    </div>
@endsection
@section('script')
    <script src={{asset("croppie.js")}}></script>
    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 550,
                height: 350,
                type: 'square'
            },
            boundary: {
                width: 900,
                height: 550
            }
        });

        let res

        $('#croppie-input').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                res = e.target.result
                uploadCrop.croppie('bind', {
                    url: res
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('.itn-croppie').slideDown();
            $('#itn-croppie-save').show();
            $('#itn-croppie-rotate').show();
        });

        $('#itn-croppie-save').on('click', function () {
            $('#itn-croppie-save').hide();
            $('#itn-croppie-rotate').hide();
            $('.itn-croppie').slideUp();
            uploadCrop.croppie('result', {
                type: 'base64',
                size: {width:622, height:490}
            }).then(function (result) {
                $('#itn-croppie-result').attr('src', result)
                $('#itn-croppie-result-i').attr('value', result)
                $('#croppie-input').val('')
            });
        });

        let i = 1;

        $('#itn-croppie-rotate').on('click', function () {
            i = i + 1
            if (i === 9) {
                i = 1
            }
            uploadCrop.croppie('bind', {
                url: res,
                orientation: i,
            });
        });
    </script>
@endsection
