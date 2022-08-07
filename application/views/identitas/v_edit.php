<div class="row">
	
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

				echo form_open('identitas/edit/'.$identitas->id_identitas);
				
				?>

<div class="form-group">
	<label>Alamat Website</label>
	<input name="judul_website" value="<?= $identitas->judul_website ?>" type="text" class="form-control" placeholder="Alamat Website" required>
</div>

<div class="form-group">
	<label>Alamat Kantor</label>
	<input name="alamat" value="<?= $identitas->alamat ?>" type="text" class="form-control" placeholder="Alamat Kantor" required>
</div>

<div class="form-group">
	<label>Email</label>
	<input name="email" value="<?= $identitas->email ?>" type="text" class="form-control" placeholder="Email" required>
</div>

<div class="form-group">
	<label>Telepon</label>
	<input name="telp" value="<?= $identitas->telp ?>" type="text" class="form-control" placeholder="Telepon" required>
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

