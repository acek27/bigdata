@extends('layouts.master')

@section('css')
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCyz35pK5Ccrp8a58PJSEO9vhLC6WU3FvU&sensor=false&libraries=drawing,geometry"></script>
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body" id="map-canvas" style="width:100%;height:720px;">
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 11,
                center: {lat: -7.7050532, lng: 113.9952789},
                scrollwheel: false,
            });

            map.data.loadGeoJson('gis/Infrastruktur_Point.geojson');
            map.data.setStyle(function (feature) {
                return {icon: feature.getProperty('icon')};
            });
        }
        google.maps.event.addDomListener(window, "load", initMap);
    </script>
    <script>
        var map;
        var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(-19.257753, 146.823688),
                zoom: 2,
                mapTypeId: 'terrain'
            });

            var kmlLayer = new google.maps.KmlLayer(src, {
                suppressInfoWindows: true,
                preserveViewport: false,
                map: map
            });
            kmlLayer.addListener('click', function(event) {
                var content = event.featureData.infoWindowHtml;
                var testimonial = document.getElementById('capture');
                testimonial.innerHTML = content;
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
@endpush
