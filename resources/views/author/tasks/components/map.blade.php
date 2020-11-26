<input type="hidden" name="typeTask" value="Карта">
<div class="form-example-int mg-t-30">
  <div class="form-group">
    <div class="basic-tb-hd">
      <h4>Выберите место на карте</h4>
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