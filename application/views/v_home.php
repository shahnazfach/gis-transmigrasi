<div id="map" style="height: 500px;" class="news"></div>
<script src="<?= base_url()?>leaflet-search-master/src/leaflet-search.js"></script>
<script>

	//sample data values for populate map
	var data = [
		<?php foreach ($kegiatan as $key => $value) { ?>
		{
			"loc":[<?= $value->latitude ?>, <?= $value->longitude ?>],
			"title":"<?= $value->nama_kegiatan ?>",
			"id":"<?=  base_url('kegiatan/detail/'.$value->id_kegiatan) ?>",
			"nama_kegiatan":"<?= $value->nama_kegiatan ?>",
			"sampul":"<?= base_url('sampul/'.$value->sampul) ?>",
			"icon":"<?= base_url('icon/'.$value->icon) ?>"
		},
		<?php } ?>
	];

	var map = new L.Map('map', {zoom: 15, center: new L.latLng(2.7951164,117.522892) });	//set center from first location
	map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

//---------polygone-------------	
$.getJSON("<?= base_url('leaflet/transmigrasi.geojson') ?>", function(data){
		geoLayer =L.geoJson(data,{
			style: function(feature){

				var id = feature.properties.id;
				if (id==1) {
					return{
						opacity: 0.5,
						color: 'rgba(35,35,35,1.0)',
						dashArray: '',
						lineCap: 'butt',
						lineJoin: 'miter',
						weight: 1.0, 
						fill: true,
						fillOpacity: 0.5,
						fillColor: 'rgba(62,40,231,1.0)',
						interactive: true,
					};
				}else if(id==2){
					return{
						opacity: 0.5,
						color: 'rgba(35,35,35,1.0)',
						dashArray: '',
						lineCap: 'butt',
						lineJoin: 'miter',
						weight: 1.0, 
						fill: true,
						fillOpacity: 0.5,
						fillColor: 'rgba(189,207,52,1.0)',
						interactive: true,
					};
				}else if(id==3){
					return{
						opacity: 0.5,
						color: 'rgba(35,35,35,1.0)',
						dashArray: '',
						lineCap: 'butt',
						lineJoin: 'miter',
						weight: 1.0, 
						fill: true,
						fillOpacity: 0.5,
						fillColor: 'rgba(231,132,25,1.0)',
						interactive: true,
					};
				}else if(id==4){
					return{
					opacity: 0.5,
					color: 'rgba(35,35,35,1.0)',
					dashArray: '',
					lineCap: 'butt',
					lineJoin: 'miter',
					weight: 1.0, 
					fill: true,
					fillOpacity: 0.5,
					fillColor: 'rgba(161,40,212,1.0)',
					interactive: true,
					};
				}else if(id==5){
					return{
					opacity: 0.5,
					color: 'rgba(35,35,35,1.0)',
					dashArray: '',
					lineCap: 'butt',
					lineJoin: 'miter',
					weight: 1.0, 
					fill: true,
					fillOpacity: 0.5,
					fillColor: 'rgba(238,22,40,1.0)',
					interactive: true,
					};
				}else if(id==6){
					return{
					opacity: 0.5,
					color: 'rgba(35,35,35,1.0)',
					dashArray: '',
					lineCap: 'butt',
					lineJoin: 'miter',
					weight: 1.0, 
					fill: true,
					fillOpacity: 0.5,
					fillColor: 'rgba(124,226,84,1.0)',
					interactive: true,
					};
				}
				
			},
			onEachFeature:function(feature, layer) {
				
			}
		}).addTo(map);
 	});
//---------end polygone-------------


	var markersLayer = new L.LayerGroup();	//layer contain searched elements
	map.addLayer(markersLayer);
	var controlSearch = new L.Control.Search({
		position:'topleft',		
		layer: markersLayer,
		initial: false,
		zoom: 18,
		marker: false
	});
	map.addControl( new L.Control.Search({
		layer: markersLayer,
		initial: false,
		collapsed: true,
		zoom: 18,
	}) );
	////////////populate map with markers from sample data
	for(i in data) {
		var title = data[i].title;	//value searched
		var loc = data[i].loc;
		var	id = data[i].id;
		var sampul = data[i].sampul;
		var nama_kegiatan = data[i].nama_kegiatan;
		var	icon = data[i].icon;
		var ikon = L.icon({iconUrl: icon,iconSize:[28,45]});
		var info_tempat = "<div class='media text-center'>";
			info_tempat += "<div class='media-center'>";
			info_tempat += "<img class='media-object' src='"+ sampul +"' width='200px' height='100px'>";
			info_tempat += "</div>";
			info_tempat += "<div class='media-body '>";
			info_tempat += "<p><b>"+ nama_kegiatan +"</b></p>";
			info_tempat += "<div class='text-center'><a href='"+id+"' class='btn btn-success btn-minier text-center'><i class='fa fa-eye'></i> Detail</a></div>";
			info_tempat +="</div>";
			info_tempat +="</div>";		

		var marker = new L.Marker(new L.latLng(loc), {title: title, icon:ikon});//se property searched
		marker.bindPopup(info_tempat);
		markersLayer.addLayer(marker);
	}

	

</script>

