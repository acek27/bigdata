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
@endpush
