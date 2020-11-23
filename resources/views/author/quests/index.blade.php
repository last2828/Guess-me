@extends('author.layout')

@section('stylesheets')
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
  <!-- wave CSS
    ============================================ -->
  <link rel="stylesheet" href="{{asset('css/wave/button.css')}}">
@endsection

@section('content')
  <!-- Data Table area Start-->
  <div class="data-table-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="data-table-list">
            <div class="basic-tb-hd">
              <h2>Basic Example</h2>
              <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                <tr>
                  <th>Название</th>
                  <th>Категория</th>
                  <th>Уровень</th>
                  <th>Заданий</th>
                  <th>Прохождений</th>
                  <th>Статус</th>
                  <th>Дата создания</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quests as $quest)
                <tr>
                  <td>{{$quest->title}}</td>
                  <td>{{$quest->category->name}}</td>
                  <td>{{$quest->level->title}}</td>
                  <td>{{$quest->questions_count}}</td>
                  <td>{{$quest->attempts}}</td>
                  <td>{{($quest->status == false) ? 'Выключен' : 'Включен'}}</td>
                  <td>{{$quest->created_at->format('d.m.Y')}}</td>
                  <td><a href="{{route('quests.show', $quest->id)}}" target="_blank" class="btn btn-success notika-btn-success waves-effect" role="button"><i class="notika-icon notika-eye" style="font-size: large"></i></a></td>
                  <td><a href="{{route('quests.edit', $quest->id)}}" class="btn btn-warning notika-btn-warning waves-effect" role="button"><i class="notika-icon notika-edit" style="font-size: large"></i></a></td>
                  <td><a href="{{route('quests.destroy', $quest->id)}}" class="btn btn-danger notika-btn-danger waves-effect" role="button" onclick="confirm('Are you sure?')"><i class="notika-icon notika-trash" style="font-size: large"></i></a></td>
                </tr>
                @endforeach
                <tfoot>
                <tr>
                  <th>Название</th>
                  <th>Категория</th>
                  <th>Уровень</th>
                  <th>Заданий</th>
                  <th>Прохождений</th>
                  <th>Статус</th>
                  <th>Дата создания</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Data Table area End-->
@endsection

@section('scripts')
  <!-- Data Table JS
		============================================ -->
  <script src="{{asset('js/data-table/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/data-table/data-table-act.js')}}"></script>
@endsection