<div class="row">
	<div class="col-md-12">
		<div class="widget-box widget-color-blue2">
			<div class="widget-header">
				<h4 class="widget-title lighter smaller"><?= $title ?></h4>
				<div class="widget-toolbar no-border">
				<div class="inline dropdown-hover">
				
				<?php if($this->session->userdata('username')<>'') {?>
					<a href="<?= base_url('kegiatan/add1') ?>" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
				<?php } ?>
				<a href="<?= base_url('kegiatan/lap') ?>"  class="btn btn-flat btn-sm btn-primary"><i class="fa fa-print"></i> Print</a>

				</div>
			</div>
			</div>
			

			<div class="widget-body">
				<div class="widget-main padding-8">
					
				<?php 
				// notifikasi
				if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="icon fa fa-check"></i>';
				echo $this->session->flashdata('pesan');
				echo '</div>';
				}
				?>
			  
			  <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
				<thead>
					<tr>
						<th width="30px" class="text-center">No</th>
						<th class="text-center">Nama Kegiatan</th>
						<th class="text-center">Jenis Kegiatan</th>
						<th class="text-center">Sumber Dana</th>
						<th class="text-center">Anggaran</th>
						<th class="text-center">Volume</th>
						<th class="text-center">Pelaksana</th>
						<th class="text-center">Tahun</th>
						<th class="text-center">
						<?php if($this->session->userdata('username')<>'') { ?>
						Action
						<?php }else{ ?> 
						Detail
						<?php } ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($kegiatan as $key => $value) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $value->nama_kegiatan ?></td>
						<td><?= $value->jenis_kegiatan ?></td>
						<td><?= $value->sumber_dana ?></td>
						<td>Rp. <?= number_format( $value->anggaran,0) ?></td>
						<td><?= $value->volume ?></td>
						<td><?= $value->pelaksana ?></td>
						<td class="text-center"><?= $value->tahun ?></td>
						<td class="text-center">
							<a href="<?= base_url('kegiatan/detail/'.$value->id_kegiatan) ?>" class="btn btn-flat btn-mini btn-info"><i class="fa fa-eye"></i></a>
							<?php if($this->session->userdata('username')<>'') { ?>
							<a href="<?= base_url('kegiatan/edit/'.$value->id_kegiatan) ?>" class="btn btn-flat btn-mini btn-warning"><i class="fa fa-pencil"></i></a>
							<a href="<?= base_url('kegiatan/delete/'.$value->id_kegiatan) ?>" class="btn btn-flat btn-mini btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ini.?')"><i class="fa fa-trash"></i></a>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			
			</table>		
				</div>
			</div>
		</div>
	</div>	
</div>
