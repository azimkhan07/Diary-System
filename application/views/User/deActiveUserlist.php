<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diary - User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php include 'application/views/cssPages.php'; ?>
    <style>
        /* Style for the toggle button */
        .toggle {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide the default checkbox */
        .toggle input {
            display: none;
        }

        /* Slider (circle) */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        /* Rounded sliders */
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        /* Change background color when checked */
        input:checked+.slider {
            background-color: #2196F3;
        }

        /* Move the slider when checked */
        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        
    </style>
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
                                    <i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div> Deactive User List
                                    <!-- <div class="page-title-subheading">This is an dashboard used to show the whole data .</div> -->
                                </div>
                            </div>
                            <!-- <div class="page-title-actions">
                                <div class="d-inline-block">
                                    <a type="button" href="<?php echo base_url('index.php/welcome/addUser') ?>" class="btn-shadow btn btn-info">
                                        Add User
                                    </a>
                                </div>
                            </div> -->
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
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Landmark</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($all_record as $record) {
                                        ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $record['user_num']; ?></td>
                                                <td><?= $record['name']; ?></td>
                                                <td><?= $record['email']; ?></td>
                                                <td><?= $record['mobile']; ?></td>
                                                <td><?= $record['address']; ?></td>
                                                <td><?= $record['landmark']; ?></td>
                                                <!-- <td><?= $record['password']; ?></td> -->
                                                <td data-id="<?= $record['id']; ?>" class="dataToggleClass">
                                                    <label class="toggle">
                                                        <input type="checkbox" id="dataToggle">
                                                        <span class="slider"></span>
                                                    </label>
                                                </td>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('.dataToggleClass').change(function() {
            const dataToggle = document.getElementById("dataToggle");
            var id = $(this).attr('data-id');
            if (confirm("Do you want to Activate User ?")) {
                $.ajax({
                    url: '<?php echo base_url() ?>user/activeUser?id=' + id,
                    success: function(result) {
                        console.log(result);
                        if (result != 'fail') {
                            window.location.reload();
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>
</body>

</html>