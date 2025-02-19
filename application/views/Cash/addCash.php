<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diary - Credit Cash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is application use to diary system.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php include 'application/views/cssPages.php'; ?>
</head>

<body style="width: 100%;">
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

                <div class="main-card mb-3 card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Credit Cash</h5>
                        <form action="<?php echo base_url('index.php/Cash/addCash') ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="usernumber" class="col-md-2">User Number</label>
                                        <div class="col-md-7">
                                            <select name="usernumber" id="usernumber" class="form-control form-control-sm">
                                                <option value="0">Select User Number</option>
                                                <?php foreach ($records as $rec) { ?>
                                                    <option value="<?php echo $rec['id'] ?>"><?= $rec['user_num'] . ' - ' . $rec['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-2">Name</label>
                                        <div class="col-md-7">
                                            <input type="text" name="name" id="uname" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date" class="col-md-2">Date</label>
                                        <div class="col-md-7">
                                            <input type="date" name="date" id="date" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="amount" class="col-md-2">Amount</label>
                                        <div class="col-md-7">
                                            <input type="text" name="amount" id="amount" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
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
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i =1; foreach ($list as $record) { 
                                                if ($record['credit'] != NULL) { ?>
                                                <tr>
                                                <td><?= $i; ?></td>
                                                    <td><?= $record['user_num'] ?></td>
                                                    <td><?= $record['name'] ?></td>
                                                    <td><?= $record['email'] ?></td>
                                                    <td><?= $record['date'] ?></td>
                                                    <td><?= $record['credit'] ?></td>
                                                </tr>
                                            <?php $i++;
                                            } }?>
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
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/main.d810cf0ae7f39f28f336.js"></script> -->
    <?php include 'application/views/jsPages.php'; ?>
    <script>
        $('#usernumber').change(function() {
            var id = $(this).val();
            // alert(id);
            $.ajax({
                method: 'GET',
                type: 'json',
                url: "<?php echo base_url() ?>index.php/User/getUserById?id=" + id,
                success: function(data) {
                    var data = $.parseJSON(data);
                    console.log(data);
                    // alert(data.name);

                    if (data != null) {
                        $('#uname').val(data.name);
                    } else {
                        $('#uname').val();
                    }
                }

            });
        });
    </script>
</body>

</html>