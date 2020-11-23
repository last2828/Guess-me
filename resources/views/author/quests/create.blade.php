@extends('author.layout')
@section("stylesheets")
  <!-- Range Slider CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/bootstrap-select/bootstrap-select.css')}}">


@endsection
@section('content')
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-form"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Новый квест</h2>
                    <p>Создайте интересное и увлекательное приключение</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-element-area">
    <form action="{{route('quests.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="tabs-info-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="widget-tabs-int">
                <div class="widget-tabs-int">
                  <div class="widget-tabs-list">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#about">Описание</a></li>
                      <li><a data-toggle="tab" href="#tasks">Задания</a></li>
                      <li><a data-toggle="tab" href="#settings">Настройки</a></li>
                    </ul>
                    <div class="tab-content tab-custom-st">
                      <div id="about" class="tab-pane fade in active">
                        <div class="tab-ctn">
                          @include('author.quests.components.about')
                        </div>
                      </div>
                      <div id="tasks" class="tab-pane fade">
                        <div class="tab-ctn">
                          @include('author.quests.components.tasks')
                        </div>
                      </div>
                      <div id="settings" class="tab-pane fade">
                        <div class="tab-ctn">
                          @include('author.quests.components.settings')
                        </div>
                      </div>
                    </div>
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

  <script>
    function preview() {
      frame.src=URL.createObjectURL(event.target.files[0]);
    }
  </script>

  <!-- counterup JS
		============================================ -->
  <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
  <script src="{{asset('js/counterup/counterup-active.js')}}"></script>

  <!-- sparkline JS
============================================ -->
  <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
@endsection