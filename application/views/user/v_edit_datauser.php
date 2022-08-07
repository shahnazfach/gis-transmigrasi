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

                echo form_open('user/edit/'.$user->id_user);
                
                ?>

<div class="form-group">
    <label>Nama User</label>
    <input name="nama_user" value="<?= $user->nama_user ?>" type="text" class="form-control" placeholder="Nama User" required>
</div>

<div class="form-group">
    <label>Username</label>
    <input name="username" value="<?= $user->username ?>" type="text" class="form-control" placeholder="Username" required>
</div>

<div class="form-group">
    <label>Password</label>
    <input name="password" value="<?= $user->password ?>" type="text" class="form-control" placeholder="Password" required>
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

