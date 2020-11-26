<input type="hidden" name="typeTask" value="Миссия">
<div class="summernote-wrap mg-t-30">
  <div class="cmp-tb-hd">
    <h2>Создайте задание</h2>
  </div>
  <div class="html-editor"></div>
</div>

<div class="form-example-int mg-t-30">
  <div class="form-group">
    <div class="basic-tb-hd">
      <h4>Тип ответа</h4>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="bootstrap-select fm-cmp-mg">
          <select class="selectpicker" name="typeAnswer_id" title='выберите тип ответа...' required>
            {{--@foreach($typesAnswer as $typeAnswer)--}}
              {{--<option value="{{$typeAnswer->id}}">{{$typeAnswer->name}}</option>--}}
            {{--@endforeach--}}
            <option value="1">Текст</option>
            <option value="2">Медиа файл</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="form-example-int mg-t-30">
  <div class="form-example-int">
    <div class="form-group">
      <div class="basic-tb-hd">
        <h4>Введите количество баллов</h4>
      </div>
      <div class="nk-int-st">
        <input type="text" class="form-control input-sm" placeholder="баллы*" name="points" required>
      </div>
    </div>
  </div>
</div>