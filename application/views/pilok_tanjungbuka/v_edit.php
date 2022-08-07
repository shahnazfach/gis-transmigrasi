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

                echo form_open('pilok_tanjungbuka/edit/'.$pilok_tanjungbuka->id_lokasi);
                
                ?>

<div class="form-group">
    <label>Informasi</label>
    <input name="letak_lokasi" value="<?= $pilok_tanjungbuka->letak_lokasi ?>" type="text" class="form-control" placeholder="Informasi" required>
</div>

<div class="form-group">
    <label>Batas Lokasi</label>
    <input name="batas_lokasi" value="<?= $pilok_tanjungbuka->batas_lokasi ?>" type="text" class="form-control" placeholder="Batas Lokasi" required>
</div>

<div class="form-group">
    <label>Pencapaian Lokasi</label>
    <input name="pencapaian_lokasi" value="<?= $pilok_tanjungbuka->pencapaian_lokasi ?>" type="text" class="form-control" placeholder="Pencapaian Lokasi" required>
</div>

<div class="form-group">
    <label>Alokasi Lahan</label>
    <input name="alokasi_lahan" value="<?= $pilok_tanjungbuka->alokasi_lahan ?>" type="text" class="form-control" placeholder="Alokasi Lahan" required>
</div>

<div class="form-group">
    <label>Pembangunan</label>
    <input name="pembangunan" value="<?= $pilok_tanjungbuka->pembangunan ?>" type="text" class="form-control" placeholder="Pembangunan" required>
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

