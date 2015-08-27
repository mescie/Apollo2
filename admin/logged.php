<?php
require_once('../db_config.php');
require('../class.users.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SV Apollo '69 2 - 2015/2016 Scoreboard</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/general.css" rel="stylesheet">

</head>
<body>

<?php
if (isset($_GET['page'])) {
    $page_id = $_GET['page']; //Get the request URL
} else {
    $page_id = '';
}

function layout($page_id) {
    switch($page_id) {
        default:
            include( 'view/users.php' );
        case '':
            include( 'view/users.php' );
            break;
        case 'edit_user':
            include( 'view/edit_user.php' );
            break;
        case 'add_user':
            include( 'view/add_user.php' );
            break;
    }
}

layout($page_id); //Call the function with the argument
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>

<script src="../js/light-table-sorter.min.js"></script>
<script> LightTableSorter.init() </script>

<script src="../js/scoreboard.js"></script>
</body>
</html>
