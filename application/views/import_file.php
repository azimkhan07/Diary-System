<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bulk Upload Medicine</h3>

            </div>
            <div class="card-body">
                <form id="import_form" method="POST" enctype="multipart/form-data">

                    <p>select excel file :
                        <input type="file" name="file" id="file" required accept=".xls, .xlsx">
                    </p>
                    </br>
                    <input type="submit" name="import" value="Import" class="btn btn-primary">

                </form>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $("#import_form").on('submit', function(event) {
            event.preventDefault();
            var data = new FormData(this);
            $.ajax({
                url: "<?= base_url('import/importmed') ?>",
                method: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    $('#file').val('');
                    load_data();
                    alert(data);
                }

            });

        });
    </script>
</body>

</html>