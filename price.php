<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Calculator</title>
    <meta name="description"
          content="">
    <meta name="keywords"
          content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" target="_blank" href="img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" target="_blank" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="preloader-site">
<?php
$connect = mysqli_connect("localhost", "root", "", "calculator");
?>
<div class="container">
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Excursions</h3><br/>
        <table id="editable_table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Excursion</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM excursions ORDER BY id";
            $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo '
      <tr>
       <td class="d-none">' . $row["id"] . '</td>
       <td>' . $row["excursion_name"] . '</td>
       <td>' . $row["adult_price"] . '</td>
       <td>' . $row["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Headphones</h3><br/>
        <table id="editable_table-1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Headphones</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query1 = "SELECT * FROM headphones ORDER BY id";
            $result1 = mysqli_query($connect, $query1);
            while ($row1 = mysqli_fetch_array($result1)) {
                echo '
      <tr>
       <td class="d-none">' . $row["id"] . '</td>
       <td>' . $row1["headphone_name"] . '</td>
       <td>' . $row1["adult_price"] . '</td>
       <td>' . $row1["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Foodactivity</h3><br/>
        <table id="editable_table-2" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Foodactivity</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query2 = "SELECT * FROM foodactivity ORDER BY id";
            $result2 = mysqli_query($connect, $query2);
            while ($row2 = mysqli_fetch_array($result2)) {
                echo '
      <tr>
       <td class="d-none">' . $row2["id"] . '</td>
       <td>' . $row2["foodactivity_name"] . '</td>
       <td>' . $row2["adult_price"] . '</td>
       <td>' . $row2["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Boats</h3><br/>
        <table id="editable_table-3" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Boats</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query3 = "SELECT * FROM boats ORDER BY id";
            $result3 = mysqli_query($connect, $query3);
            while ($row3 = mysqli_fetch_array($result3)) {
                echo '
      <tr>
       <td class="d-none">' . $row3["id"] . '</td>
       <td>' . $row3["boats_name"] . '</td>
       <td>' . $row3["adult_price"] . '</td>
       <td>' . $row3["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Guide</h3><br/>
        <table id="editable_table-4" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Guide</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query4 = "SELECT * FROM guide ORDER BY id";
            $result4 = mysqli_query($connect, $query4);
            while ($row4 = mysqli_fetch_array($result4)) {
                echo '
      <tr>
       <td class="d-none">' . $row4["id"] . '</td>
       <td>' . $row4["guide_name"] . '</td>
       <td>' . $row4["adult_price"] . '</td>
       <td>' . $row4["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Other</h3><br/>
        <table id="editable_table-5" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Other</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query5 = "SELECT * FROM other ORDER BY id";
            $result5 = mysqli_query($connect, $query5);
            while ($row5 = mysqli_fetch_array($result5)) {
                echo '
      <tr>
       <td class="d-none">' . $row5["id"] . '</td>
       <td>' . $row5["other_name"] . '</td>
       <td>' . $row5["adult_price"] . '</td>
       <td>' . $row5["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <br>
        <br>
        <h3 align="center">Transport</h3><br/>
        <table id="editable_table-6" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="d-none">ID</th>
                <th>Transport</th>
                <th>Adult price</th>
                <th>Student price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query6 = "SELECT * FROM transport ORDER BY id";
            $result6 = mysqli_query($connect, $query6);
            while ($row6 = mysqli_fetch_array($result6)) {
                echo '
      <tr>
       <td class="d-none">' . $row6["id"] . '</td>
       <td>' . $row6["transport_name"] . '</td>
       <td>' . $row6["adult_price"] . '</td>
       <td>' . $row6["student_price"] . '</td>
      </tr>
      ';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<!--Scripts-->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"
        integrity="sha384-R5JkiUweZpJjELPWqttAYmYM1P3SNEJRM6ecTQF05pFFtxmCO+Y1CiUhvuDzgSVZ"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#editable_table').Tabledit({
            url: 'action.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'excursion_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-1').Tabledit({
            url: 'action1.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'headphone_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-2').Tabledit({
            url: 'action2.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'foodactivity_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-3').Tabledit({
            url: 'action3.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'boats_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-4').Tabledit({
            url: 'action4.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'guide_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-5').Tabledit({
            url: 'action5.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'other_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });
        $('#editable_table-6').Tabledit({
            url: 'action6.php',
            columns: {
                identifier: [0, "id"],
                editable: [[1, 'transport_name'], [2, 'adult_price'], [3, 'student_price']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.id).remove();
                }
            }
        });

    });
</script>﻿
</body>

</html>