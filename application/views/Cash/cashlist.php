<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diary - Cash List</title>
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
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div> Cash List
                                    <!-- <div class="page-title-subheading">This is an dashboard used to show the whole data .</div> -->
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        Add Cash
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('index.php/welcome/addCash') ?>">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span> Credit</span>
                                                    <div class="ml-auto badge badge-pill badge-success"><?= $credit['id'] ?></div>
                                                </a>
                                            </li>
                                            <li class="nav-item" href="<?php echo base_url('index.php/welcome/debitCash') ?>">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span> Debit</span>
                                                    <div class="ml-auto badge badge-pill badge-danger"><?= $debit['id'] ?></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <th>Credit</th>
                                            <th>Debit</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; 
                                        foreach ($list as $record) { 
                                            $amount = $record['credit'] - $record['debit'];
                                            ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $record['user_num'] ?></td>
                                                <td><?= $record['name'] ?></td>
                                                <td><?= $record['email'] ?></td>
                                                <td class="text-success"><?= $record['credit']; ?></td>
                                                <td class="text-danger"><?= $record['debit']; ?></td>
                                                <td class="text-info"><?= $amount; ?></td>
                                            </tr>
                                        <?php $i++;
                                        } ?>
                                    </tbody>
                                </table>
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