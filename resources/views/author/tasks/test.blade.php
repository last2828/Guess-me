@extends('layouts.quest')

@section('stylesheets')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvqa_LFxKAZ9_8w-EkXNQVSg5IbBET6M&callback=initMap" defer></script>

  <script>
    let map, infoWindow;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 6,
      });
      infoWindow = new google.maps.InfoWindow();
      const locationButton = document.createElement("button");
      locationButton.textContent = "Pan to Current Location";
      locationButton.classList.add("custom-map-control-button");
      map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
      locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
              };

              function setLocationCoordinates(lat, lng) {
                const latitudeField = document.getElementById("address-latitude");
                const longitudeField = document.getElementById("address-longitude");

                latitudeField.value = lat;
                longitudeField.value = lng;
              }

              infoWindow.setPosition(pos);
              infoWindow.setContent("Location found.");
              infoWindow.open(map);
              map.setCenter(pos);
            },
            () => {
              handleLocationError(true, infoWindow, map.getCenter());
            }
          );
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(
        browserHasGeolocation
          ? "Error: The Geolocation service failed."
          : "Error: Your browser doesn't support geolocation."
      );
      infoWindow.open(map);
    }

  </script>
@endsection
@section('content')

<center><div id="map" style="height:500px;width:900px;margin-top:5%;"></div></center>
<form action="{{route('tasks.store', 1)}}" method="POST">
  @csrf
  <div class="form-group">
    <div class="basic-tb-hd">
      <h4>Мое местонахождение</h4>
    </div>
    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
  </div>
  <button type="submit">Отправить</button>
</form>

@endsection

@section('scripts')

@endsection