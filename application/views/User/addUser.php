<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diary - Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php include 'application/views/cssPages.php'; ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <?php include 'application/views/layouts/topNav.php'; ?>
        <!-- <?php include 'application/views/layouts/theme.php'; ?> -->
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <?php include 'application/views/layouts/sidebard.php'; ?>
            </div>
            <!-- <?php if ($this->session->userdata('msg') != '') { ?>
                <div class="col-md-12">
                    <div class="alert <?= $this->session->userdata('class') ?>">
                        <?= $this->session->userdata('msg') ?>
                    </div>
                </div>
            <?php } ?> -->
            <div class="app-main__outer">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add User</h5>
                                <form action="<?php echo base_url('index.php/User/addUser') ?>" method="post">
                                    <div class="col-md-12">
                                        <div class="form-group row mt-2">
                                            <label for="name" class="col-sm-3">Name :</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="enter full name">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="email" class="col-sm-3">Email :</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="i.e example@example.com">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="mobile" class="col-sm-3">Mobile :</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="number" id="number" class="form-control form-control-sm" placeholder="enter number">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="dob" class="col-sm-3">Date Of Birth :</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="dob" id="dob" class="form-control form-control-sm" placeholder="enter number">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="gender" class="col-sm-3">Gender :</label>
                                            <div class="col-sm-9">
                                                <select name="gender" id="gender" class="form-control form-control-sm">
                                                    <option value="0">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="address" class="col-sm-3">Address :</label>
                                            <div class="col-sm-9">
                                                <textarea name="address" id="address" cols="111" rows="3" placeholder="enter full address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="address" class="col-sm-3">Landmark :</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="landmark" id="landmark" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-5 mt-2">
                                            <button type="submit" class="btn btn-small btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="tabs-animation">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Details
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>User Number</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Landmark</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i = 1;
                                                foreach($all_record as $record){
                                            ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $record['user_num']; ?></td>
                                                <td><?= $record['name']; ?></td>
                                                <td><?= $record['email']; ?></td>
                                                <td><?= $record['mobile']; ?></td>
                                                <td><?= $record['address']; ?></td>
                                                <td><?= $record['landmark']; ?></td>
                                                <td><?= $record['password']; ?></td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'application/views/layouts/footer.php'; ?>
            </div>
        </div>

    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
</body>

</html>