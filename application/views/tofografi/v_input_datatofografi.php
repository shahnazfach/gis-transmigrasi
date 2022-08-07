<div class="row">
    <div class="col-md-7">
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

                echo form_open('tofografi/add');
                
                ?>

<div class="form-group">
    <label>Simbol</label>
    <input name="simbol" type="text" class="form-control" placeholder="Simbol" required>
</div>

<div class="form-group">
    <label>Kemiringan Lahan</label>
    <input name="kemiringan_lahan" type="text" class="form-control" placeholder="Kemiringan Lahan" required>
</div>

<div class="form-group">
    <label>Bentuk Lahan</label>
    <input name="bentuk_lahan" type="text" class="form-control" placeholder="Bentuk Lahan" required>
</div>

<div class="form-group">
    <label>Luas (HA)</label>
    <input name="luas_Ha" type="text" class="form-control" placeholder="Alokasi Lahan" required>
</div>

<div class="form-group">
    <label>Luas Persen (%)</label>
    <input name="luas_persen" type="text" class="form-control" placeholder="Luas Persen (%)" required>
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
