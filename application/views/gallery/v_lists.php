<div class="row">
	<div class="col-md-12">
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
						<th width="150px" class="text-center">Sampul</th>
						<th class="text-center">Foto</th>
						<?php if ($this->session->userdata('username')<>"") { ?>
						<th class="text-center"> Action</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($gallery as $key => $value) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $value->nama_kegiatan ?></td>
						<td class="text-center">
							<img src="<?= base_url('sampul/'.$value->sampul) ?>" width="150px" height="90px"><br>
							<?php if ($this->session->userdata('username')<>"") { ?>
							<button data-toggle="modal" data-target="#<?= $value->id_kegiatan ?>" class="btn btn-success btn-flat btn-minier"><i class="fa fa-pencil"></i> Ganti Sampul</button>
							<?php } ?>
						</td>
						<td class="text-center"><span class="label label-success">
						<i class="ace-icon fa fa-image bigger-120"></i> <?= $value->total_foto ?> Foto</span></td>
						<?php if ($this->session->userdata('username')<>"") { ?>
						<td class="text-center">
							<a href="<?= base_url('gallery/add/'.$value->id_kegiatan); ?>" class="btn btn-primary btn-flat btn-mini"><i class="fa fa-plus"></i> Add Foto</a>
						</td>
						<?php } ?>
					</tr>
					<?php } ?>
				</tbody>
			
			</table>
			
					
				</div>
			</div>
		</div>
	</div>	
</div>





   <!-- edit -->
   <?php foreach ($gallery as $key => $value) {?>
	<div class="modal fade" id="<?= $value->id_kegiatan ?>">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ganti Sampul</h4>
              </div>
              <div class="modal-body">
			<?php 
			echo form_open_multipart('gallery/sampul/'.$value->id_kegiatan);
				?>

				<div class="form-group">
					<label class="control-label">Sampul Lama</label><br>
					<img src="<?= base_url('sampul/'.$value->sampul) ?>" width="260px" height="150px">
				</div>

				<div class="form-group">
					<label class="control-label">Ganti Sampul Baru</label>
					<input name="sampul" type="file" class="form-control" required><br>
					<label class="control-label text-danger">*Ukuran Foto Max 2000 kb</label>

				</div>
			
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary btn-flat">Save</button>
              </div>
			  <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

 <?php } ?>
