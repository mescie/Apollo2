<?php
    $obj = new users();
    $position = $obj->playerPosition($_GET['id']);
    $positionString = implode("", $position);
    $naam = $obj->getNaam($_GET['id']);
    $goals = $obj->getGoals($_GET['id']);
?>

<div class="container">
    <div class="col-md-12">

        <a href="../admin/logged.php" name="next" type="submit" class="btn-primary btn pull-right">
            <span class="glyphicon glyphicon glyphicon glyphicon-list" aria-hidden="true"></span> Users
        </a>

        <h2>Edit user - <?php echo $naam ?></h2>

        <form action="../admin/update.php" method="post">
            <table class="table table-striped table-bordered">

                <tr>
                    <td>Naam</td>
                    <td colspan="4">
                        <input type="text" class="form-control" name="naam" value="<?php echo $naam ?>"/>
                        <input type="hidden" class="form-control" name="uID" value="<?php echo $_GET['id'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Positie</td>
                    <td colspan="4">
                        <select name="positie" class="form-control select-type">
                            <option value="0" <?php if ($positionString == 0) echo "selected";?>>Keeper</option>
                            <option value="1" <?php if ($positionString == 1) echo "selected";?>>Verdediger</option>
                            <option value="2" <?php if ($positionString == 2) echo "selected";?>>Middenvelder</option>
                            <option value="3" <?php if ($positionString == 3) echo "selected";?>>Aanvaller</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Goals</td>
                    <td colspan="4">
                        <input type="text" class="form-control" name="doelpunten" value="<?php echo $goals ?>"/>
                    </td>
                </tr>
            </table>

            <div class="row">
                <div class="col-md-1 pull-right buttonbox">
                    <button name="save" type="submit" class="btn-success btn" />
                        <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Save
                    </button>
                </div>
            </div>

        </form>
    </div>

</div>