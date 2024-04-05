<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <title>Home</title>-->
<!--        <link href="css/global.css" rel="stylesheet" type="text/css"/>-->
<!--    </head>-->
<!--    <body>-->
<!--    </body>-->
<!--</html>-->

<?php
require_once "lib/f-html.php";
require_once "queries/queries.php";

echo start_html("Home");

$rows = (getFromDB());

require_once "templates/headerTemplate.php";

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
            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["age"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>