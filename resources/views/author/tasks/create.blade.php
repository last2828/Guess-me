@extends('layouts.quest')

@section("stylesheets")
  <!-- Range Slider CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/bootstrap-select/bootstrap-select.css')}}">


  <link rel="stylesheet" href="{{asset('css/wave/button.css')}}">

  <!-- summernote CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/summernote/summernote.css')}}">

@endsection

@section('content')
  @include('author.components.quest-menu')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form action="{{route('tasks.store', $quest->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-example-wrap">
        <div class="form-example-int">
          <div class="form-group">
            <div class="basic-tb-hd">
              <h4>Введите название</h4>
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control input-sm" placeholder="название*" name="title">
            </div>
          </div>
        </div>
        @if($typeTask == 'quiz')
          @include('author.tasks.components.quiz')
        @elseif($typeTask == 'mission')
          @include('author.tasks.components.mission')
        @elseif($typeTask == 'map')
          @include('author.tasks.components.map')
        @endif
        <div class="form-example-int mg-t-15">
          <button type="submit" class="btn btn-success notika-btn-success">Сохранить</button>
          <a class="btn btn-danger notika-btn-danger" href="{{route('tasks.index', $quest->slug)}}">Отменить</a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('scripts')
  @parent
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvqa_LFxKAZ9_8w-EkXNQVSg5IbBET6M&libraries=places&callback=initialize" async defer></script>
  <script src="{{asset('js/mapInput.js')}}"></script>

  <!-- bootstrap select JS
		============================================ -->
  <script src="{{asset('js/bootstrap-select/bootstrap-select.js')}}"></script>

  <!--  summernote JS
   ============================================ -->
  <script src="{{asset('js/summernote/summernote-updated.min.js')}}"></script>
  <script src="{{asset('js/summernote/summernote-active.js')}}"></script>

@endsection