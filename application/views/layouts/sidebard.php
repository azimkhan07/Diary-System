<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading"> Menu </li>
            <?php if($this->session->userdata('dashboard_user_email') != 'admin@diary.com' ){ ?>
                <li class="mm-active">
                <a href="<?php echo base_url('dashboard'); ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i> Dashboards
                </a>
            </li>
            <?php } else{?>
            <li class="mm-active">
                <a href="<?php echo base_url(); ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i> Dashboards
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-browser"></i> Users
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('userlist') ?>">
                            <i class="metismenu-icon"></i> User List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('addUser') ?>">
                            <i class="metismenu-icon"></i> Add User
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('updatePassword') ?>">
                            <i class="metismenu-icon"></i>Update Password
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('deActiveUserlist') ?>">
                            <i class="metismenu-icon"></i>Deactive User List
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-plugin"></i> Amount
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo basename('cashlist') ?>">
                            <i class="metismenu-icon"></i> Total
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('addCash') ?>">
                            <i class="metismenu-icon"></i> Credit Amount
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('debitCash') ?>">
                            <i class="metismenu-icon"></i> Debit Amount
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            <li>
                <a href="<?php echo base_url('profile') ?>">
                    <i class="metismenu-icon pe-7s-users"></i>Profile
                </a>
            </li>
            <li class="mm-active">
                <a href="<?php echo base_url('logout') ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i>Logout
                </a>
            </li>
        </ul>
    </div>
</div>