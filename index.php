<?php include('./header.php'); ?>

<div class="container">
    <div class="col-md-12">
        <table class="table table-striped text-center scoreboard">
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
        <table class="table table-striped text-center">
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

    <div class="col-md-6">
        <h2>Meest gespeeld</h2>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th>Aantal wedstrijden</th>
                <th>Speler</th>
            </tr>
            </thead>

        </table>
    </div>

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