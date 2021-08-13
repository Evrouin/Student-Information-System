<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>PUP Admin | Student List </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <?php require_once "../admin_navbar.php" ?>
        <div class="container w-100 p-3">
            <label>Search Student Details</label>
            <div id="search_area">
                <input type="text" name="employee_search" id="employee_search" class="form-control input" autocomplete="off" placeholder="Enter Student Detail" />
            </div>
            <br />
            <div id="employee_data"></div>
        </div>
    </body>

    </html>

    <script>
        $(document).ready(function() {

            load_data('');

            function load_data(query, typehead_search = 'yes') {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        query: query,
                        typehead_search: typehead_search
                    },
                    success: function(data) {
                        $('#employee_data').html(data);
                    }
                });
            }

            $('#employee_search').typeahead({
                source: function(query, result) {
                    $.ajax({
                        url: "fetch.php",
                        method: "POST",
                        data: {
                            query: query
                        },
                        dataType: "json",
                        success: function(data) {
                            result($.map(data, function(item) {
                                return item;
                            }));
                            load_data(query, 'yes');
                        }
                    });
                }
            });

            $(document).on('click', 'li', function() {
                var query = $(this).text();
                load_data(query);
            });

        });
    </script>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>