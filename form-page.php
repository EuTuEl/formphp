<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <title>Form</title>-->
<!--        <link href="css/global.css" rel="stylesheet" type="text/css"/>-->
<!--    </head>-->
<!--    <body>-->
<!--    </body>-->
<!--</html>-->

<?php
require_once "lib/f-html.php";
require_once "queries/queries.php";

//print_r($_POST);

$savedValues = [
        "name" => "",
        "age" => "",
];

if (isset($_POST["button"])) {

    $savedValues["name"] = str_replace(' ', '', $_POST["name"]);
    $savedValues["age"] = $_POST["age"];
    print_r($_POST);
    echo "<br>";
    print_r($savedValues);
    if (!$savedValues["name"] || !$savedValues["age"]) {
        echo "dont insert";
    } else {
//        insertLine(["name", "age"], [$_POST["name"], $_POST["age"]]);
        echo "insert";
        $savedValues = [
            "name" => "",
            "age" => "",
        ];
    }

}



echo start_html("Form");
require_once "templates/headerTemplate.php";
?>

<div id="form-container">
    <h1>Form</h1>
    <form action="" method="post" name="form">
        <label for='name' class="form-el">Name:</label>
        <input id='name' type='text' name="name" class="form-el" value='<?php echo $savedValues["name"]?>'>
        <label for='age' class="form-el">Age:</label>
        <input id='age' type='number' name="age" class="form-el" value='<?php echo $savedValues["age"]?>'>
        <button name="button">Submit</button>
    </form>
</div>
