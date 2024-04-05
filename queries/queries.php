<?php
require_once "common/connect_db.php";

function getFromDB (): array
{
    global $conn;
    $sql = /** @lang text */
        "SELECT id, name, age FROM clients";
    $result = mysqli_query($conn, $sql);

//    if (mysqli_num_rows($result) > 0) {
//        while($row = mysqli_fetch_assoc($result)) {
//            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td></tr>";
//        }
//    } else {
//        echo "0 results";
//    }
    $rows = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
//            $rows[$row["id"]] = ["name"=>$row["name"], "age"=>$row["age"]];
            $rows[$row["id"]] = $row;
        }
    }
    $conn->close();

    return $rows;
};

function insertLine (array $array_params,array $array_values)
{
    global $conn;
    $string = transformArray($array_values);
    $sql = /** @lang text */
        "INSERT INTO clients (".implode(',',$array_params).") VALUES ($string)";
    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
};
function transformArray(array $array)
{
    $string = "";
    foreach ($array as $item) {
        $string = $string."'".$item."',";
    }
    $string = rtrim($string, ",");
//    for ($i = 1)
    return $string;
}



