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

                echo form_open('biayapembangunan/edit/'.$biayapembangunan->id_biaya);
                
                ?>

<div class="form-group">
    <label>Jenis Pembangunan</label>
    <input name="jenis" value="<?= $biayapembangunan->jenis ?>" type="text" class="form-control" placeholder="Jenis Pembangunan" required>
</div>

<div class="form-group">
    <label>Volume (Unit)</label>
    <input name="volume" value="<?= $biayapembangunan->volume ?>" type="text" class="form-control" placeholder="Volume (Unit)" required>
</div>

<div class="form-group">
    <label>Satuan</label>
    <input name="satuan" value="<?= $biayapembangunan->satuan ?>" type="text" class="form-control" placeholder="Satuan" required>
</div>

<div class="form-group">
    <label>Harga Satuan (Rp)</label>
    <input name="harga_satuan" value="<?= $biayapembangunan->harga_satuan ?>" type="text" class="form-control" placeholder="Harga Satuan (Rp)" required>
</div>

<div class="form-group">
    <label>Jumlah Harga (Rp)</label>
    <input name="jumlah_harga" value="<?= $biayapembangunan->jumlah_harga ?>" type="text" class="form-control" placeholder="Jumlah Harga (Rp)" required>
</div>

<div class="form-group">
    <label>Keterangan</label>
    <input name="ket" value="<?= $biayapembangunan->ket ?>" type="text" class="form-control" placeholder="Keterangan" required>
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

