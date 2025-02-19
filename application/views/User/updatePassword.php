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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        .up {
            font-size: 2rem;
            display: flex;
            align-items: center;
            align-content: center;
            text-align: center;
            padding: 0.83333rem;
            margin: 0 30px 0 0;
            /* background: #fff; */
            /* box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, .03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, .03), 0 0.25rem 0.53125rem rgba(4, 9, 20, .05), 0 0.125rem 0.1875rem rgba(4, 9, 20, .03); */
            border-radius: 0.25rem;
            width: 40px;
            height: 40px;
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
                                <div> Update User Password

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
                                                <td>
                                                    <button type="button" style="height: 48px;width: 69px;padding: 5px;" data-id="<?= $record['id']; ?>" class="btn mr-2 mb-2 btn-primary info" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="pe-7s-server up"></i>
                                                    </button>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url() ?>User/updatePassword" method="POST" class="editbuttonform">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">
                            The Password is first four charector of Name and the year of birth in four digit.
                            i.e the name of user is Micheal and thier date of birth is 07-06-1990 then the password is
                            <b>MICH1990</b> (letter are capital).
                        </p><br>
                        <hr>
                        <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                            <div class="form-group row">
                                <label for="password" class="col-sm-3">Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control col-sm-9" autocomplete="off" name="pass" id="pass" placeholder="Enter New Password">
                                </div>
                            </div>
                            <input type="hidden" name="modalInput" id="modalInput">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
        @media print {

            .modal-content {
                width: 100%;
            }


            .modal {
                overflow: hidden;
            }

        }
    </style>

    <div class="app-drawer-overlay d-none animated fadeIn"></div>


    <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.table').on('click', '.info', function() {

            var id = $(this).attr('data-id');
            // alert(id);

            $.ajax({
                url: '<?= base_url('User/getPassword') ?>?id=' + id,
                type: 'GET',
                dataType: 'JSON',
                success: function(response) {
                    console.log(response);
                    // console.log(response.id);
                    // $('#editbuttonform').find('[name="modalInput"]').val(response.id).end();
                    $('#modalInput').val(response.id);
                    $('#exampleModal').modal('show');
                }
            });

        });
    </script>

</body>

</html>
</body>

</html>