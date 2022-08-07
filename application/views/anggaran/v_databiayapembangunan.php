<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-blue2">
            <div class="widget-header">
                <h4 class="widget-title lighter smaller"><?= $title ?></h4>
                <div class="widget-toolbar no-border">
                <div class="inline dropdown-hover">
                
                <?php if($this->session->userdata('username')<>'') {?>
                    <a href="<?= base_url('biayapembangunan/add') ?>" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                        <th width="30px" class="text-center">No</th>
                        <th class="text-center">Jenis pembangunan</th>
                        <th class="text-center">Volume (Unit)</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Harga Satuan (Rp)</th>
                        <th class="text-center">Jumlah Harga (Rp)</th>
                        <th class="text-center">Keterangan</th>
                       <?php if($this->session->userdata('username')<>'') { ?>
                        <th class="text-center">Action</th>
                        <?php } ?> 
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($biayapembangunan as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->jenis ?></td>
                        <td><?= $value->volume ?></td>
                        <td><?= $value->satuan ?></td>
                        <td><?= $value->harga_satuan ?></td>
                        <td><?= $value->jumlah_harga ?></td>
                        <td><?= $value->ket ?></td>
                        <?php if($this->session->userdata('username')<>'') { ?>
                        <td class="text-center">
                            <a href="<?= base_url('biayapembangunan/edit/'.$value->id_biaya) ?>" class="btn btn-flat btn-mini btn-warning"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('biayapembangunan/delete/'.$value->id_biaya) ?>" class="btn btn-flat btn-mini btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ini.?')"><i class="fa fa-trash"></i></a>
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