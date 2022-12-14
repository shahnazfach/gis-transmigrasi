<div class="col-sm-6">
  <div class="panel panel-primary">
    <div class="panel-heading">Lokasi Kegiatan</div>
    <div class="panel-body">

	<div id="map" style="height: 340px;"></div>	

	</div>
  </div>
</div>

<div class="col-sm-6">
  <div class="panel panel-primary">
    <div class="panel-heading">Data Kegiatan</div>
    <div class="panel-body">

	<table class="table table-bordered">
		<tr>
			<th width="150px">Nama Kegiatan</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->nama_kegiatan ?></td>
		</tr>
		<tr>
			<th>Jenis Kegiatan</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->jenis_kegiatan ?></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->alamat ?></td>
		</tr>
		<tr>
			<th>Sumber Dana</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->sumber_dana ?></td>
		</tr>
		<tr>
			<th>Anggaran</th>
			<td width="20px">:</td>
			<td>Rp. <?= number_format($kegiatan->anggaran,0) ?></td>
		</tr>
		<tr>
			<th>Volume</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->volume?></td>
		</tr>
		<tr>
			<th>Pelaksana</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->pelaksana ?></td>
		</tr>
		<tr>
			<th>Tahun</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->tahun ?></td>
		</tr>
		<tr>
			<th>Deskripsi</th>
			<td width="20px">:</td>
			<td><?= $kegiatan->deskripsi ?></td>
		</tr>
	</table>

	</div>
  </div>
</div>

<div class="col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Gallery Kegiatan</div>
    <div class="panel-body">


	<div class="col-xs-4 col-sm-4 pricing-box">
		<div class="widget-box widget-color-blue">
			<div class="widget-header">
				<h6 class="widget-title bigger lighter">Foto Sampul</h6>
			</div>
	
			<div class="widget-body">
				<div class="widget-main text-center">
					<img src="<?= base_url('sampul/'.$kegiatan->sampul) ?>" width="280px"  height="180px">
				</div>
				<div>
					<button class="btn btn-info btn-minier" data-toggle="modal" data-target="#sampul<?= $kegiatan->id_kegiatan ?>">
						<i class="ace-icon fa fa-eye"></i> View
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php  foreach ($gallery as $key => $value) { ?>
	
	<div class="col-xs-4 col-sm-4 pricing-box">
		<div class="widget-box widget-color-blue">
			<div class="widget-header">
				<h6 class="widget-title bigger lighter"><?= $value->ket_foto ?></h6>
			</div>
	
			<div class="widget-body">
				<div class="widget-main text-center">
					<img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan) ?>" width="280px"  height="180px">
				</div>
				<div>
					<button class="btn btn-info btn-minier" data-toggle="modal" data-target="#<?= $value->id_gallery ?>">
						<i class="ace-icon fa fa-eye"></i> View
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	</div>
  </div>
</div>


<?php  foreach ($gallery as $key => $value) { ?>
<div class="modal fade" id="<?= $value->id_gallery ?>">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title"><?= $value->ket_foto ?></h4>
		</div>
		<div class="modal-body">
		<div class="text-center">
		
				<img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan) ?>" width="800px"  height="500px">
		</div>
		</div>
	</div>
</div>
</div>
<?php } ?>

<div class="modal fade" id="sampul<?= $kegiatan->id_kegiatan ?>">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Foto Sampul</h4>
		</div>
		<div class="modal-body">
		<div class="text-center">
				<img src="<?= base_url('sampul/'.$kegiatan->sampul) ?>" width="800px"  height="500px">
		</div>
		</div>
	</div>
</div>
</div>


<script>

	

	var map = L.map('map').setView([<?= $kegiatan->latitude?>,<?= $kegiatan->longitude?>], 18);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

		var logo = L.icon({
			iconUrl: '<?= base_url('icon/'.$kegiatan->icon) ?>',
			iconSize:     [30, 50], // size of the icon
			//iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
			popupAnchor:  [-1,1] // point from which the popup should open relative to the iconAnchor
		});

		var info_tempat = "<div class='media text-center'>";
			info_tempat += "<div class='media-center'>";
			info_tempat += "<img class='media-object' src='<?= base_url('sampul/'.$kegiatan->sampul) ?>' width='200px' height='100px'>";
			info_tempat += "</div>";
			info_tempat += "<div class='media-body '>";
			info_tempat += "<p><b><?= $kegiatan->nama_kegiatan ?></b></p>";
			info_tempat +="</div>";
			info_tempat +="</div>";

		L.marker([<?= $kegiatan->latitude?>,<?= $kegiatan->longitude?>],{icon:logo}).addTo(map)
    		.bindPopup(info_tempat).openPopup();

		
</script>
