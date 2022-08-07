<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="<?= base_url() ?>foto_kegiatan/test.jpg" class="user-image img-responsive" />
            </li>

            <li>
                <a href="<?= base_url('home') ?>"><i class="fa fa-globe"></i> WEBGIS </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> Data Informasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('kegiatan') ?>"> Kegiatan </a>
                    </li>
                    <li>
                        <a href="<?= base_url('jenis') ?>"> Jenis Kegiatan </a>
                    </li>
                    <li>
                        <a href="<?= base_url('sumberdana') ?>"> Sumber Dana </a>
                    </li>
                    <li>
                        <a href="<?= base_url('tahun') ?>"> Tahun </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-info-circle"></i> Kawasan Transmigrasi <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('identitas') ?>"> Identitas </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pilok_tanjungbuka') ?>"> Pilok Tanjung Buka </a>
                    </li>
                    <li>
                        <a href="<?= base_url('biayapembangunan') ?>"> Biaya Pembukaan Lahan </a>
                    </li>
                    <li>
                        <a href="<?= base_url('tentangtransmigrasi') ?>"> Tentang Transmigrasi </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-table"></i> Tabel Lahan <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('tofografi') ?>"> Tabel Kemiringan Lahan </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url('gallery') ?>"><i class="fa fa-photo"></i> Gallery </a>
            </li>
            <?php if ($this->session->userdata('username')<>"") { ?>
            <li>
                <a href="<?= base_url('user') ?>"><i class="fa fa-users"></i> User </a>
            </li>

        <?php } ?>
        </ul>


    </div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><?= $title; ?></h2>

            </div>
        </div>
        <!-- /. ROW  -->
        <hr />