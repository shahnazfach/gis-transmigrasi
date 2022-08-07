<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-blue2">
            <div class="widget-header">
                <h4 class="widget-title lighter smaller"><?= $title ?></h4>
                <div class="widget-toolbar no-border">
                <div class="inline dropdown-hover">
                
                <?php if($this->session->userdata('username')<>'') {?>
                    <a href="<?= base_url('tofografi/add') ?>" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
                <?php } ?>
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
                <th>No</th>
                <th>Simbol</th>
                <th>Kemiringan Lahan</th>
                <th>Bentuk Lahan</th>
                <th>Luas (Ha)</th>
                <th>Luas Persen (%)</th>
                <?php if ($this->session->userdata('username')<>"") { ?>
                <th>Action</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tofografi as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->simbol ?></td>
                    <td><?= $value->kemiringan_lahan ?></td>
                    <td><?= $value->bentuk_lahan ?></td>
                    <td><?= $value->luas_Ha ?></td>
                    <td><?= $value->luas_persen ?></td>
                    <?php if ($this->session->userdata('username')<>"") { ?>
                    <td>
                        <a href="<?= base_url('tofografi/edit/' . $value->id_tabelmiring) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('tofografi/hapus/' . $value->id_tabelmiring) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Data Ingin di Hapus?')">Hapus</a>
                    </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>