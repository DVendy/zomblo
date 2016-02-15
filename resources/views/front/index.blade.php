@extends('front.base')

@section('head')
<script>
function initialize() {
	var mapProp = {
		center:new google.maps.LatLng(-1.40610884,118.69628906),
		zoom:5,
		mapTypeId:google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,
		styles :[{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}]
	};
	var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			map.setCenter(pos);
			map.setZoom(14);
		}, function() {
			//alert("Mohon aktifkan lokasi.");
		});
	} else {
		//alert("Mohon aktifkan lokasi.");
	}
}



google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop

@section('body')
    <div id="googleMap"></div>
    <div class="main">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-3">
    				<div class="logo">
    					<h1>ZOMBLO</h1>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-12">
    				<div class="banner">
    					<h1>TEMUKAN JODOHMU DENGAN MUDAH MELALUI <strong>ZOMBLO</strong></h1>
    					<div class="subtitle">
	    					<h3>Morbi non massa arcu, sed molestie arcu tellus vitae vestibulum.</h3>
	    					<h2>Libero lacus semper tellus vitae massa at sollicitudin dolor magna nulla velit.</h2>
    					</div>
    					<div class="subbutton">
    						<a class="btn-daftar" href=""><i class="fa fa-chevron-circle-up"></i> DAFTAR</a>
    						<a class="btn-daftar" href="">MASUK <i class="fa fa-chevron-circle-right"></i></a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@stop