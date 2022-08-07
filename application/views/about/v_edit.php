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

                echo form_open('tentangtransmigrasi/edit/'.$tentangtransmigrasi->id_transmigrasi);
                
                ?>

            <form role="form">
                <div class="form-group">
                    <label>Transmigrasi</label>
                    <input name="transmigrasi" placeholder="Transmigrasi" value="<?= $tentangtransmigrasi->transmigrasi ?>" class=" form-control" />
                </div>

                <form role="form">
                    <div class="form-group">
                        <label>Sejarah</label>
                        <input name="sejarah" placeholder="Sejarah" value="<?= $tentangtransmigrasi->sejarah ?>" class=" form-control" />
                    </div>

                    <form role="form">
                        <div class="form-group">
                            <label>Tujuan</label>
                             <input name="tujuan" placeholder="Tujuan" value="<?= $tentangtransmigrasi->tujuan ?>" class=" form-control" />
                        </div>

                    <form role="form">
                        <div class="form-group">
                            <label>Syarat Transmigran</label>
                            <input name="syarat_transmigran" placeholder="Syarat Transmigran" value="<?= $tentangtransmigrasi->syarat_transmigran ?>" class=" form-control" />
                        </div>

                        <form role="form">
                            <div class="form-group">
                                <label></label>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-sm btn-success">Reset</button>
                            </div>

                            <?php echo form_close() ?>
        </div>
    </div>
</div>
