<?php
    $obj = new users();
    $data = $obj->getpoints();
    $position = $obj->playerposition();
    $positionString = implode("", $position);
    $nextid = $obj->nextplayer();
?>

<div class="container-fluid">
    <div class="col-md-12">
        <h1>Admin</h1>

        <a href="../admin/logged.php" name="next" type="submit" class="btn-primary btn pull-right">
            <span class="glyphicon glyphicon glyphicon glyphicon-list" aria-hidden="true"></span> Users
        </a>

        <h2>Edit user - <?php echo $data['naam'] ?></h2>

        <form action="../admin/update.php" method="post">
            <table class="table table-striped table-bordered edit-t">

                <tr>
                    <td>Naam</td>
                    <td colspan="4"><?php echo $data['naam'] ?> <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>"/></td>
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
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>Gespeeld</td>
                    <td><input type="text" class="form-control" name="gespeeld" value="<?php echo $data['gespeeld'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Cleansheet</td>
                    <td><input type="text" class="form-control" name="cleansheet" value="<?php echo $data['cleansheet'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Gescoord</td>
                    <td><input type="text" class="form-control" name="gescoord" value="<?php echo $data['gescoord'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Assist</td>
                    <td><input type="text" class="form-control" name="assist" value="<?php echo $data['assist'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Winst</td>
                    <td><input type="text" class="form-control" name="winst" value="<?php echo $data['winst'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Gelijkspel</td>
                    <td><input type="text" class="form-control" name="gelijkspel" value="<?php echo $data['gelijkspel'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>Geel</td>
                    <td><input type="text" class="form-control" name="geel" value="<?php echo $data['geel'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Rood</td>
                    <td><input type="text" class="form-control" name="rood" value="<?php echo $data['rood'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Tegengoal</td>
                    <td><input type="text" class="form-control" name="tegengoal" value="<?php echo $data['tegengoal'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Eigengoal</td>
                    <td><input type="text" class="form-control" name="eigengoal" value="<?php echo $data['eigengoal'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center">0</td>
                </tr>
                <tr>
                    <td>Jasje</td>
                    <td><input type="text" class="form-control" name="jasje" value="<?php echo $data['jasje'] ?>"/></td>
                    <td class="text-center add-points">
                        <span class="glyphicon glyphicon-arrow-up positive pointer" aria-hidden="true"></span>
                    </td>
                    <td class="text-center remove-points">
                        <span class="glyphicon glyphicon-arrow-down negative pointer" aria-hidden="true"></span>
                    </td>
                    <td id="score" class="text-center" class="text-center">0</td>
                </tr>
            </table>

            <div class="row">
                <div class="col-md-1 pull-right buttonbox" >
                    <a href="../admin/logged.php?page=edit_user&id=<?php echo $nextid ?>" name="next" type="submit" class="btn-primary btn">
                        <span class="glyphicon glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Next
                    </a>
                </div>

                <div class="col-md-1 pull-right buttonbox">
                    <button name="save" type="submit" class="btn-success btn" />
                        <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Save
                    </button>
                </div>
            </div>

        </form>
    </div>

</div>