@extends('layouts.quest')
@section("stylesheets")
  <!-- Range Slider CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/bootstrap-select/bootstrap-select.css')}}">

  <link rel="stylesheet" href="{{asset('css/wave/button.css')}}">

@endsection

@section('content')

  @include('author.components.quest-menu')

  <div class="form-element-area">
    <form action="{{route('quests.update', $quest->id)}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-example-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-example-wrap">
                <div class="form-example-int">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Введите название</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="название*" name="title" value="{{$quest->title}}">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Описание</h4>
                    </div>
                    <div class="nk-int-st">
                      <textarea class="form-control" rows="5" placeholder="краткое описание вашего квеста...." name="description">{{$quest->description}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Категория квеста</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="bootstrap-select fm-cmp-mg">
                          <select class="selectpicker" name="category_id" title='выберите категорию...'>
                            @foreach($categories as $category)
                              <option {{($quest['category_id'] == $category->id) ? 'selected' : ''}}  value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Минимальное количество участников</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="минимум игроков*" name="min_players_count" value="{{$quest->min_players_count}}">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Максимальное количество участников</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="максимум игроков*" name="max_players_count" value="{{$quest->max_players_count}}">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Уровень сложности</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="bootstrap-select fm-cmp-mg">
                          <select class="selectpicker" name="level_id" title="выберите уровень...">
                            @foreach($levels as $level)
                              <option {{($quest['level_id'] == $level->id) ? 'selected' : ''}} value="{{$level->id}}">{{$level->title}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Время на прохождение</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="nk-int-st">
                            <input type="text" class="form-control input-lg" placeholder="введите время" name="lead_time" value="{{$quest->lead_time}}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>URL</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="nk-int-st">
                            <input type="text" class="form-control input-lg" placeholder="введите url" name="slug" value="{{$quest->slug}}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Image Cropper area Start-->
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Титульное изображение</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="nk-int-st">
                            <div class="btn-group images-cropper-pro">
                              <label for="upload-photo" class="btn btn-primary">Загрузить...</label>
                              <input type="file" id="upload-photo" name="logo_image" onchange="preview()" style="display:none;">
                              <div>
                                <img class="mg-t-30" id="frame" src="{{$quest->logo_image_url}}" width="200px" height="200px"/>
                                <script>
                                  function preview() {
                                    frame.src=URL.createObjectURL(event.target.files[0]);
                                  }
                                </script>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Image Cropper area End-->
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Локация</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" id="address-input" name="address" class="form-control map-input" value="{{$quest->address}}">
                    </div>
                    <input type="hidden" name="address_latitude" id="address-latitude" value="{{$quest->address_latitude}}" />
                    <input type="hidden" name="address_longitude" id="address-longitude" value="{{$quest->address_longitude}}" />
                  </div>
                  <div id="address-map-container" style="width:100%;height:300px; ">
                    <div style="width: 100%; height: 100%" id="address-map"></div>
                  </div>
                  <div class="form-example-int mg-t-15">
                    <button type="submit" class="btn btn-success notika-btn-success">Сохранить</button>
                    <a class="btn btn-danger notika-btn-danger" href="{{route('quests.index')}}">Отменить</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  @parent
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvqa_LFxKAZ9_8w-EkXNQVSg5IbBET6M&libraries=places&callback=initialize" async defer></script>
  <script src="{{asset('js/mapInput.js')}}"></script>

  <!-- bootstrap select JS
		============================================ -->
  <script src="{{asset('js/bootstrap-select/bootstrap-select.js')}}"></script>

@endsection