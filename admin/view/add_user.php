<div class="container">
    <div class="col-md-12">
        <h2>Add user</h2>

        <form action="../admin/add.php" method="post">
            <table class="table table-striped table-bordered" style="width:70%">

                <tr>
                    <td>Naam</td>
                    <td><input type="text" class="form-control" name="naam" placeholder="Voornaam + Achternaam" /></td>
                </tr>
                <tr>
                    <td>Positie</td>
                    <td>
                        <select class="form-control" name="positie">
                            <option value="0">Keeper</option>
                            <option value="1">Verdediger</option>
                            <option value="2">Middenvelder</option>
                            <option value="3">Aanvaller</option>
                        </select>
                    </td>
                </tr>
            </table>

            <button name="save" type="submit" class="btn-success btn pull-right" />
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Save
            </button>

        </form>
    </div>

</div>