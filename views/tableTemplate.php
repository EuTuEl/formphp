<?php
require_once "queries/queries.php";


?>

<div id="table-container">
    <h1>Clients Table</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php getFromDB() ?>
        </tbody>
    </table>
</div>
