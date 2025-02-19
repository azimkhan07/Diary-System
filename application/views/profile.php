<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diary - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php include 'application/views/cssPages.php'; ?>
    <style>
        .app-main_outer {
            background-image: url(<?php echo base_url() ?>assets/css/images/sidebar/abstract4.jpg);
            background-repeat: no-repeat;
            background-size: auto;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <?php include 'application/views/layouts/topNav.php'; ?>
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
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div> Login Profile

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-animation">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="form-group row">
                                            <label for="usernumber" class="col-md-2">User Number</label>
                                            <div class="col-md-7">
                                                <label for=""><?= $profile[''] ?></label>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2">Name</label>
                                            <div class="col-md-7">
                                                <label for=""><?= $profile['name'] ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date" class="col-md-2">Email</label>
                                            <div class="col-md-7">
                                                <label for=""><?= $profile['email'] ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="amount" class="col-md-2">Mobile Number</label>
                                            <div class="col-md-7">
                                                <label for=""><?= $profile['mobile'] ?></label>
                                            </div>
                                        </div>
                                    </div>
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
    <?php include 'application/views/jsPages.php'; ?>
</body>

</html>