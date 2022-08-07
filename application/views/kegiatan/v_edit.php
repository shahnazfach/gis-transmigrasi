<div class="row">
	<div class="col-md-7">
		<div class="widget-box widget-color-blue2">
			<div class="widget-header">
				<h4 class="widget-title lighter smaller">Lokasi</h4>
				<div class="widget-toolbar no-border">
				<div class="inline dropdown-hover">
				</div>
			</div>
			</div>
			<div class="widget-body">
				<div class="widget-main padding-8">
					
				<div id="map" style="height: 800px;"></div>		
			
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-5">
		<div class="widget-box widget-color-blue2">
			<div class="widget-header">
				<h4 class="widget-title lighter smaller"><?= $title ?></h4>
				<div class="widget-toolbar no-border">
				<div class="inline dropdown-hover">
				</div>
			</div>
			</div>
			<div class="widget-body">
				<div class="widget-main padding-8">
					
				<?php
				
				//notifikasi error
				echo validation_errors('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

				echo form_open('kegiatan/edit/'.$kegiatan->id_kegiatan);
				
				?>

<div class="form-group">
	<label>Nama Kegiatan</label>
	<input name="nama_kegiatan" value="<?= $kegiatan->nama_kegiatan ?>" type="text" class="form-control" placeholder="Nama Kegiatan" required>
</div>

<div class="form-group">
	<label>Jenis Kegiatan</label>
	<select name="id_jenis" class="form-control" required>
		<option value="">--Pilihan--</option>
		<?php foreach ($jenis as $key => $value) { ?>
		
			<option value="<?= $value->id_jenis ?>" <?php if ($kegiatan->id_jenis==$value->id_jenis){echo 'selected';}?>><?= $value->jenis_kegiatan ?></option>

		<?php } ?>
	</select>
</div>

<div class="form-group">
	<div class="col-md-12">
		<label>Lokasi (Drag And Drop Marker Untuk Mengambil Coordinat)</label>
	</div>
	<div class="col-md-6">
		<input name="latitude" value="<?= $kegiatan->latitude ?>" id="Latitude" type="text" class="form-control" placeholder="Latitude" required>
	</div>
	<div class="col-md-6">
		<input name="longitude" value="<?= $kegiatan->longitude ?>" id="Longitude" type="text" class="form-control" placeholder="Longitude" required>
	</div>
</div>

<div class="form-group">
	<label>Alamat</label>
	<input name="alamat" value="<?= $kegiatan->alamat ?>" type="text" class="form-control" placeholder="Alamat" required>
</div>

<div class="form-group">
	<label>Sumber Dana</label>
	<select name="id_sumberdana" class="form-control" required>
		<option value="">--Pilihan--</option>
		<?php foreach ($sumberdana as $key => $value) { ?>
		
			<option value="<?= $value->id_sumberdana ?>" <?php if ($kegiatan->id_sumberdana==$value->id_sumberdana){echo 'selected';}?>><?= $value->sumber_dana ?></option>

		<?php } ?>
	</select>
</div>


	<div class="form-group">
		<label>Anggaran</label>
		<input name="anggaran" value="<?= $kegiatan->anggaran ?>" type="text" class="form-control" placeholder="Anggaran" required>
	</div>
	

<div class="form-group">
	<label>Volume</label>
	<input name="volume" value="<?= $kegiatan->volume ?>" type="text" class="form-control" placeholder="Volume" required>
</div>

<div class="form-group">
	<label>Pelaksana</label>
	<input name="pelaksana" value="<?= $kegiatan->pelaksana ?>" type="text" class="form-control" placeholder="Pelaksana" required>
</div>

<div class="form-group">
	<label>Tahun</label>
	<select name="tahun" class="form-control" required>
	<option value="">-- Pilih Tahun --</option>
		<?php foreach ($tahun as $key => $value) {?>
			<option value="<?= $value->tahun ?>" <?php if ($kegiatan->tahun==$value->tahun) {echo 'selected';}?>><?= $value->tahun ?></option>
		<?php }	?>
	</select>
</div>

<div class="form-group">
	<label>Deskripsi</label>
	<textarea name="deskripsi" type="text" class="form-control" placeholder="Deskripsi"><?= $kegiatan->deskripsi ?></textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-sm btn-flat btn-primary">Simpan</button>
	<button type="reset" class="btn btn-sm btn-flat btn-warning">Reset</button>
</div>

<?php echo form_close(); ?>
			
					
				</div>
			</div>
		</div>
	</div>	

</div>







	 <!-- MAP LEAFLET SCRIPTS -->
	 <script src="<?php echo base_url() ?>leaflet/leaflet.js"></script>
		<script>
			//=====MAP=======
			var curLocation = [0, 0];
			if (curLocation[0] == 0 && curLocation[1] == 0) {
				curLocation = [<?= $kegiatan->latitude ?>, <?= $kegiatan->longitude ?>];
			}

			var map = L.map('map').setView([<?= $kegiatan->latitude ?>, <?= $kegiatan->longitude ?>], 14);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

			map.attributionControl.setPrefix(false);

			var marker = new L.marker(curLocation, {
			draggable: 'true'
			});

			marker.on('dragend', function(event) {
			var position = marker.getLatLng();
			marker.setLatLng(position, {
			draggable: 'true'
			}).bindPopup(position).update();
			$("#Latitude").val(position.lat);
			$("#Longitude").val(position.lng).keyup();
			});

			$("#Latitude, #Longitude").change(function() {
				var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
				marker.setLatLng(position, {
				draggable: 'true'
				}).bindPopup(position).update();
				map.panTo(position);
			});

			map.addLayer(marker);
		</script>
