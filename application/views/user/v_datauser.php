<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-blue2">
            <div class="widget-header">
                <h4 class="widget-title lighter smaller"><?= $title ?></h4>
                <div class="widget-toolbar no-border">
                <div class="inline dropdown-hover">
                
                <?php if($this->session->userdata('username')<>'') {?>
                    <a href="<?= base_url('user/add') ?>" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">
                        <?php if($this->session->userdata('username')<>'') { ?>
                        Action
                        <?php }else{ ?> 
                        Detail
                        <?php } ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($user as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->nama_user ?></td>
                        <td><?= $value->username ?></td>
                        <td><?= $value->password ?></td>
                        <td class="text-center">
                            <?php if($this->session->userdata('username')<>'') { ?>
                            <a href="<?= base_url('user/edit/'.$value->id_user) ?>" class="btn btn-flat btn-mini btn-warning"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('user/delete/'.$value->id_user) ?>" class="btn btn-flat btn-mini btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ini.?')"><i class="fa fa-trash"></i></a>
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