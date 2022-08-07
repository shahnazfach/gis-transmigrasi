<div class="col-sm-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Halaman Tofografi
        </div>
        <div class="panel-body">

            <?php
            //validasi data tidak boleh kosong
            echo validation_errors('<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

            //notifikasi pesan data berhasil disimpan

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open('tofografi/edit/' . $tofografi->id_tabelmiring);
            ?>

            <form role="form">
                <div class="form-group">
                    <label>Simbol</label>
                    <input name="simbol" placeholder="Simbol" value="<?= $tofografi->simbol ?>" class=" form-control" />
                </div>

                <form role="form">
                    <div class="form-group">
                        <label>Kemiringan Lahan</label>
                        <input name="kemiringan_lahan" placeholder="Kemiringan Lahan" value="<?= $tofografi->kemiringan_lahan ?>" class=" form-control" />
                    </div>

                    <form role="form">
                        <div class="form-group">
                            <label>Bentuk Lahan</label>
                            <input name="bentuk_lahan" placeholder="Bentuk Lahan" value="<?= $tofografi->bentuk_lahan ?>" class=" form-control" />
                        </div>

                    <form role="form">
                        <div class="form-group">
                            <label>Luas (Ha)</label>
                            <input name="luas_Ha" placeholder="Luas (Ha)" value="<?= $tofografi->luas_Ha?>" class=" form-control" />
                        </div>

                        <form role="form">
                        <div class="form-group">
                            <label>Luas Persen (%)</label>
                            <input name="luas_persen" placeholder="Luas Persen (%)" value="<?= $tofografi->luas_persen ?>" class=" form-control" />
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
