<div class="container">
    <div class="col-md-12">
        <h1>Admin</h1>
        <h2>Add user</h2>

        <form action="../admin/add_wedstrijd.php" method="post">
            <input type="hidden" name="datum" value="<?php echo date('Y-m-j'); ?>">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Tegenstander</td>
                    <td colspan="3"><input type="text" class="form-control" name="tegenstander" placeholder="Tegenstander" /></td>
                </tr>
                <tr>
                    <td>Eindstand</td>
                    <td><input type="text" class="form-control" name="doelpunt_voor" placeholder="Doelpunten voor" /></td>
                    <td>-</td>
                    <td><input type="text" class="form-control" name="doelpunt_tegen" placeholder="Doelpunten tegen" /></td>
                </tr>
                <tr>
                    <td><label for="winst">Gewonnen?</label></td>
                    <td colspan="3">
                        <select class="form-control" name="winst" id="winst">
                            <option value="0">Ja</option>
                            <option value="1">Nee</option>
                        </select>
                    </td>
                </tr>
            </table>

            <button name="save" type="submit" class="btn-success btn pull-right">
                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Save
            </button>

        </form>
    </div>

</div>