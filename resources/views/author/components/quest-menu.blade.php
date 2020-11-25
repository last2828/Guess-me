<!-- Start Status area -->
<div class="notika-status-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="btn-demo-notika mg-t-30">
          <a href="{{route('quests.edit', $quest->slug)}}" class="btn btn-info info-icon-notika waves-effect"><i class="notika-icon notika-house"></i> Основное</a>
          <a href="{{route('tasks.index', $quest->slug)}}" class="btn btn-success success-icon-notika waves-effect"><i class="notika-icon notika-menus"></i> Задания</a>
          <a class="btn btn-orange orange-icon-notika waves-effect"><i class="notika-icon notika-up-arrow"></i> Статистика</a>
          <a class="btn btn-gray gray-icon-notika waves-effect"><i class="notika-icon notika-menu"></i> Настройки</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Status area-->