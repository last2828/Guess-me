@extends('layouts.quest')

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
              <h2>Мои Квесты</h2>
              <div class="modals-single">
                <div class="modals-default-cl">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone">Создать</button>
                  <div class="modal fade" id="myModalone" role="dialog">
                    <div class="modal-dialog modals-default">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="{{route('quests.store')}}" method="POST">
                          @csrf
                        <div class="modal-body">
                            <div class="form-group">
                              <div class="basic-tb-hd">
                                <h4>Введите название</h4>
                              </div>
                              <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" placeholder="Название*" name="title">
                              </div>
                            </div>
                          <div class="form-group">
                            <div class="basic-tb-hd">
                              <h4>Введите URL</h4>
                            </div>
                            <div class="nk-int-st">
                              <input type="text" class="form-control input-sm" placeholder="URL" name="slug">
                            </div>
                          </div>
                          </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-default">Save changes</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                  <td>{{(isset($quest->category)) ? $quest->category->name : ''}}</td>
                  <td>{{(isset($quest->level)) ? $quest->level->title : ''}}</td>
                  <td>{{$quest->questions_count}}</td>
                  <td>{{$quest->attempts}}</td>
                  <td>{{($quest->status == false) ? 'Выключен' : 'Включен'}}</td>
                  <td>{{$quest->created_at->format('d.m.Y')}}</td>
                  <td><a href="{{route('quests.show', $quest->slug)}}" target="_blank" class="btn btn-success notika-btn-success waves-effect" role="button"><i class="notika-icon notika-eye" style="font-size: large"></i></a></td>
                  <td><a href="{{route('quests.edit', $quest->slug)}}" class="btn btn-warning notika-btn-warning waves-effect" role="button"><i class="notika-icon notika-edit" style="font-size: large"></i></a></td>
                  <td>
                    <form action="{{route('quests.destroy', $quest->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger notika-btn-danger waves-effect" role="button"><i class="notika-icon notika-trash" style="font-size: large"></i></button>
                    </form>
                  </td>
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