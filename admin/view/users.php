<div class="container-fluid">
    <div class="col-md-12">
        <a href="../admin/logged.php?page=add_user" class="btn btn-primary pull-right addplayer">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Speler toevoegen
        </a>
        <h2>Admin</h2>
    </div>

    <div class="col-md-12">
        <table class="table table-striped table-bordered text-center">
            <thead>
            <tr>
                <th>id</th>
                <th>Speler</th>
                <th class="extra-info">Positie</th>
                <th>Bewerken</th>
            </tr>
            </thead>
            <?php
            $obj = new users();
            $obj->getWedstrijden();
            ?>
        </table>
    </div>

</div>