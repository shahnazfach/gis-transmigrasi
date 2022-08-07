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

                echo form_open('tentangtransmigrasi/add');
                
                ?>

<div class="form-group">
    <label>Transmigrasi</label>
    <input name="transmigrasi" type="text" class="form-control" placeholder="Transmigrasi" required>
</div>

<div class="form-group">
    <label>Sejarah</label>
    <input name="sejarah" type="text" class="form-control" placeholder="Sejarah" required>
</div>

<div class="form-group">
    <label>Tujuan</label>
    <input name="tujuan" type="text" class="form-control" placeholder="Tujuan" required>
</div>

<div class="form-group">
    <label>Syarat Transmigran</label>
    <input name="syarat_transmigran" type="text" class="form-control" placeholder="Syarat Transmigran" required>
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

