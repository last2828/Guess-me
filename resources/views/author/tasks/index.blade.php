@extends('layouts.quest')

@section('stylesheets')
  <link rel="stylesheet" href="{{asset('css/wave/button.css')}}">
@endsection

@section('content')

  @include('author.components.quest-menu')

  <!-- Normal Table area Start-->
  <div class="normal-table-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="normal-table-list">
            <div class="basic-tb-hd">
              <h2>Basic Table</h2>
              <p>Basic example without any additional modification classes</p>
            </div>
            <div class="bsc-tbl">
              <table class="table table-sc-ex">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Название</th>
                  <th>Тип</th>
                  <th>Дата создания</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quest->tasks as $task)
                <tr>
                  <td>{{$task->id}}</td>
                  <td>{{$task->title}}</td>
                  <td>{{$task->type->name}}</td>
                  <td>{{$task->created_at->format('d.m.Y')}}</td>
                  <td><a href="{{route('tasks.show', [$quest->slug, $task->slug])}}" target="_blank" class="btn btn-success notika-btn-success waves-effect" role="button"><i class="notika-icon notika-eye" style="font-size: large"></i></a></td>
                  <td><a href="{{route('tasks.edit', [$quest->slug, $task->slug])}}" class="btn btn-warning notika-btn-warning waves-effect" role="button"><i class="notika-icon notika-edit" style="font-size: large"></i></a></td>
                  <td>
                    <form action="{{route('tasks.destroy', [$quest->slug, $task->slug])}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger notika-btn-danger waves-effect" role="button"><i class="notika-icon notika-trash" style="font-size: large"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Normal Table area End-->
@endsection

@section('scripts')
  {{----}}
@endsection