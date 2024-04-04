<?php

$servername = "localhost";
$username = "root";
$database = "test";

$conn = new mysqli($servername, $username, "", $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully"."<br>";

function getFromDB ()
{
    global $conn;
    $sql = /** @lang text */
        "SELECT id, name, age FROM clients";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
//            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
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

//$conn->close();

