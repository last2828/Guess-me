<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
      <div class="form-example-int mg-t-30">
        <div class="form-group">
          <div class="basic-tb-hd">
            <h4>Описание</h4>
          </div>
          <div class="nk-int-st">
            <textarea class="form-control" rows="5" placeholder="краткое описание вашего квеста...." name="description"></textarea>
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
                  <input type="text" class="form-control input-lg" placeholder="введите время" name="lead_time">
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
                      <img class="mg-t-30" id="frame" src="" width="200px" height="200px"/>
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
            <input type="text" id="address-input" name="address" class="form-control map-input">
          </div>
          <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
          <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
        </div>
        <div id="address-map-container" style="width:100%;height:300px; ">
          <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
        <div class="form-example-int mg-t-15">
          <button class="btn btn-success notika-btn-success">Сохранить</button>
          <a class="btn btn-danger notika-btn-danger" href="{{route('quests.index')}}">Отменить</a>
        </div>
      </div>
    </div>
  </div>
</div>