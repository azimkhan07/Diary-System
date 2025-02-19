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
                                <div> Dashboard
                                    <div class="page-title-subheading">This is an dashboard used to show the whole data .</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-animation">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                    Performance
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-4 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                            <!-- <i class="fa-light fa-sack-dollar text-white opacity-8"></i> -->
                                            <i class="fa-inr text-white opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Credit Amount</div>
                                            <div class="widget-numbers text-success"><?php echo $credits['id'] ?></div>
                                            <div class="widget-description opacity-8 text-focus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-danger"></div>
                                            <i class="fa-inr text-white opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Debit Amount</div>
                                            <div class="widget-numbers text-danger"><?php echo $debits['id'] ?></div>
                                            <div class="widget-description opacity-8 text-focus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-secondary"></div>
                                            <i class="fa-inr text-white opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Balance Amount</div>
                                            <div class="widget-numbers text-secondary"><?php $balance = $credits['id'] - $debits['id'];
                                                                                        echo $balance; ?></div>
                                            <div class="widget-description opacity-8 text-focus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Details
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-resposive table_wrapper">
                                            <table style="width: 100%;" id="example" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.No:.</th>
                                                        <th>User Number</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile Number</th>
                                                        <th>Transaction Date</th>
                                                        <th>Credit</th>
                                                        <th>Debit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($list as $record) {
                                                        if ($record['credit'] == 0) {
                                                            $credit = '-';
                                                        } else {
                                                            $credit = $record['credit'];
                                                        }
                                                        if ($record['debit'] == 0) {
                                                            $debit = '-';
                                                        } else {
                                                            $debit = $record['debit'];
                                                        }
                                                    ?>
                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $record['user_num']; ?></td>
                                                            <td><?= $record['name']; ?></td>
                                                            <td><?= $record['email']; ?></td>
                                                            <td><?= $record['mobile']; ?></td>
                                                            <td><?= $record['date']; ?></td>
                                                            <td class="text-success"><?= $credit ?></td>
                                                            <td class="text-danger"><?= $debit ?></td>
                                                        </tr>
                                                    <?php $i++;
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                            <div class="card">
                                <div class="no-gutters row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Credit Amount</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success"><?php echo $credits['id'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Debit Amount</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-danger"><?= $debits['id'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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