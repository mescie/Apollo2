<?php include('./header.php'); ?>

<div class="container">
    <div class="col-md-12">
        <table class="table table-striped text-center scoreboard tablesorter" id="table">
            <thead>
                <tr>
                    <th>
                        Naam
                    </th>
                    <th class="extra-info">
                        Gespee.
                    </th>
                    <th class="extra-info">
                        Cleans.
                    </th>
                    <th class="extra-info">
                        Goals
                    </th>
                    <th class="extra-info">
                        Assist
                    </th>
                    <th class="extra-info">
                        Winst
                    </th>
                    <th class="extra-info">
                        Gelijk
                    </th>
                    <th class="extra-info">
                        Geel
                    </th>
                    <th class="extra-info">
                        Rood
                    </th>
                    <th class="extra-info">
                        T. goal
                    </th>
                    <th class="extra-info">
                        E. goal
                    </th>
                    <th class="extra-info">
                        Jasje
                    </th>
                    <th>
                        Totaal
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php include('./puntentelling.php'); ?>
            </tbody>
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

<script type="text/javascript" src="js/jquery.tablesorter.js"></script>

<script type="text/javascript">
    $(document).ready(function()
        {
            $("#table").tablesorter();
        }
    );

    $(document).ready(function() {
        $("table").tablesorter({
            sortList: [[12,1]]
        });
    });
</script>
</body>
</html>