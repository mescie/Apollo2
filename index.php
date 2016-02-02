<?php include('./header.php'); ?>

<div class="container">
    <div class="col-md-12">
        <table class="table table-striped text-center scoreboard tablesorter" id="table">
            <thead>
                <tr>
                    <th class="pointer">
                        Naam
                    </th>
                    <th class="extra-info pointer">
                        Gespee.
                    </th>
                    <th class="extra-info pointer">
                        Cleans.
                    </th>
                    <th class="extra-info pointer">
                        Goals
                    </th>
                    <th class="extra-info pointer">
                        Assist
                    </th>
                    <th class="extra-info pointer">
                        Winst
                    </th>
                    <th class="extra-info pointer">
                        Gelijk
                    </th>
                    <th class="extra-info pointer">
                        Geel
                    </th>
                    <th class="extra-info pointer">
                        Rood
                    </th>
                    <th class="extra-info pointer">
                        T. goal
                    </th>
                    <th class="extra-info pointer">
                        E. goal
                    </th>
                    <th class="extra-info pointer">
                        Jasje
                    </th>
                    <th class="pointer">
                        Totaal
                    </th>
                    <th class="hidden">
                        Gem. p/w
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
                <th class="extra-info">Datum</th>
            </tr>
            </thead>
            <?php include('./wedstrijden.php'); ?>
        </table>
    </div>

    <div class="col-md-6">
        <h2>Topscoorders</h2>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th>Speler</th>
                <th>Doelpunten</th>
            </tr>
            </thead>
            <?php include('./topscoorders.php'); ?>
        </table>
    </div>

</div>

<?php include('./footer.php'); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scoreboard.js"></script>

<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>

<script type="text/javascript">

    var arrayDates = [];
    var time = new Date();

    arrayDates.push(new Date('January 30, 2016 13:30:00'));
    arrayDates.push(new Date('February 13, 2016 13:30:00'));

    for(i = 0; i < arrayDates.length; i++){
        if(arrayDates[i] >= time) {
            var nextMatch = arrayDates[i];
            break;
        }
    }

     $('#countdown').countdown(nextMatch, function(event) {
           var totalHours = event.offset.totalDays * 24 + event.offset.hours;
           $(this).html(event.strftime(totalHours + ' uur %M min %S sec'));
         });
</script>
</body>
</html>