<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SV Apollo '69 2 - 2015/2016 Scoreboard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <div class="col-md-12">
        <h2>SV Apollo '69 2</h2>
        <h4>2015/2016 Scoreboard</h4>
        <table class="table table-striped table-bordered text-center scoreboard">
            <thead>
                <tr>
                    <th>
                        Naam
                    </th>
                    <th class="extra-info">
                        Gespeeld
                    </th>
                    <th class="extra-info">
                        Cleansheet
                    </th>
                    <th class="extra-info">
                        Gescoord
                    </th>
                    <th class="extra-info">
                        Assist
                    </th>
                    <th class="extra-info">
                        Winst
                    </th>
                    <th class="extra-info">
                        Gelijkspel
                    </th>
                    <th class="extra-info">
                        Geel
                    </th>
                    <th class="extra-info">
                        Rood
                    </th>
                    <th class="extra-info">
                        Tegen goal
                    </th>
                    <th class="extra-info">
                        Eigen goal
                    </th>
                    <th class="extra-info">
                        Jasje
                    </th>
                    <th class="extra-info"></th>
                    <th>
                        Totaal
                    </th>
                </tr>
            </thead>
            <?php include('./puntentelling.php'); ?>
        </table>
    </div>

    <div class="col-md-6">
        <h2>Wedstrijden</h2>
        <table class="table table-striped table-bordered text-center">
            <thead>
            <tr>
                <th>Apollo</th>
                <th>Tegenstander</th>
                <th>Score</th>
                <th>Datum</th>
            </tr>
            </thead>
            <?php include('./wedstrijden.php'); ?>
        </table>
    </div>

    <!-- <div class="col-md-6">
        <h2>Meest gespeeld</h2>
        <table class="table table-striped table-bordered text-center">
            <thead>
            <tr>
                <th>Aantal wedstrijden</th>
                <th>Speler</th>
            </tr>
            </thead>

        </table>
    </div> -->

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scoreboard.js"></script>

<script src="js/light-table-sorter.min.js"></script>
<script> LightTableSorter.init() </script>
</body>
</html>