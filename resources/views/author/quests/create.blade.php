@extends('author.layout')
@section("stylesheets")
  <!-- Range Slider CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/bootstrap-select/bootstrap-select.css')}}">

  <!-- cropper CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/cropper/cropper.min.css')}}">

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
                    <h2>Create you new quest</h2>
                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
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
    <form action="{{route('quests.store')}}" method="POST">
    @csrf
      <div class="form-example-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-example-wrap">
                <div class="form-example-int">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Enter title</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="title*">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Enter description</h4>
                    </div>
                    <div class="nk-int-st">
                      <textarea class="form-control" rows="5" placeholder="Let us type some lorem ipsum...." name="description"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Select category</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="bootstrap-select fm-cmp-mg">
                          <select class="selectpicker" name="category_id" title='Choose category...'>
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
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
                      <h4>Enter the min number of players</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="min players*" name="min_players_count">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Enter the max number of players</h4>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control input-sm" placeholder="max players*" name="max_players_count">
                    </div>
                  </div>
                </div>
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Select the difficulty level</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="bootstrap-select fm-cmp-mg">
                          <select class="selectpicker" name="difficulty_level_id" title="Choose level...">
                            @foreach($levels as $level)
                            <option value="{{$level->id}}">{{$level->title}}</option>
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
                      <h4>Enter the time to complete</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <div class="nk-int-st">
                            <input type="text" class="form-control input-lg" placeholder="minutes" name="lead_time">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Image Cropper area Start-->
                <div class="images-cropper-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="image-cropper-wp">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="image-crop">
                                <img src="img/cropper/1.jpg" alt="">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="preview-img-pro-ad">
                                <div class="maincrop-img">
                                  <div class="image-crp-int">
                                    <h4>Preview image</h4>
                                    <div class="img-preview img-preview-custom"></div>
                                  </div>
                                  <div class="image-crp-img">
                                    <h4>Comon method</h4>
                                    <p>You can upload new image to crop.</p>
                                    <div class="btn-group images-cropper-pro">
                                      <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                        <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload new image
                                      </label>
                                      <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="cp-img-anal">
                                  <h4>Other method</h4>
                                  <p>
                                    You may set cropper options with <code>$(image}).cropper(options)</code>
                                  </p>
                                  <div class="btn-group images-action-pro">
                                    <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                    <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                    <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                    <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                    <button class="btn btn-warning img-cropper-cp-t" id="setDrag" type="button">New crop</button>
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
                <!-- Image Cropper area End-->
                <div class="form-example-int mg-t-30">
                  <div class="form-group">
                    <div class="basic-tb-hd">
                      <h4>Location</h4>
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
                    <button class="btn btn-success notika-btn-success">Submit</button>
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

  <!-- cropper JS
		============================================ -->
  <script src="{{asset('js/cropper/cropper.min.js')}}"></script>
  <script src="{{asset('js/cropper/cropper-actice.js')}}"></script>

@endsection