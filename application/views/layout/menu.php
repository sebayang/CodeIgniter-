<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>MENU</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

        <?php if ($this->session->userdata('type') == 1) { ?>
            <ul class="treeview-menu">
                <li class="<?= ($this->session->userdata('menu') == 'home')?'active':''; ?>"><a href="<?php echo base_url('c_user/homeAdmin'); ?>"><i class="fa fa-circle-o"></i> Daftar Website</a></li>
                <li class="<?= ($this->session->userdata('menu') == 'penilaian')?'active':''; ?>"><a href="<?php echo base_url('c_penilaian/penilaian'); ?>"><i class="fa fa-circle-o"></i> Hasil Penilaian </a></li>
            </ul>
        <?php } else { ?>
            <ul class="treeview-menu">
                <li class="<?= ($this->session->userdata('menu') == 'postanda')?'active':''; ?>"><a href="<?php echo base_url('c_post_anda'); ?>"><i class="fa fa-circle-o"></i> Post Anda</a></li>
                <li class="<?= ($this->session->userdata('menu') == 'penilaian')?'active':''; ?>"><a href="<?php echo base_url('c_penilaian/penilaian'); ?>"><i class="fa fa-circle-o"></i> Hasil Penilaian </a></li>
                <li class="<?= ($this->session->userdata('menu') == 'ulasan')?'active':''; ?>"><a href="<?php echo base_url('c_ungah_ulasan'); ?>"><i class="fa fa-circle-o"></i> Ungah Ulasan </a></li>
            </ul>
        <?php } ?>



    </li>
</ul>