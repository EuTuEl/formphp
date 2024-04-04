<?php
require_once "queries/queries.php";

if (isset($_POST["button"])) {
    insertLine(["name", "age"], [$_POST["name"], $_POST["age"]]);
}

?>
<script>
    function validate() {
        const nameInput = document.getElementById("name");
        const ageInput = document.getElementById("age");

        if(!nameInput.value || !ageInput.value) {
            console.log("false");
            return false;
        }
        console.log("true");
        return true;
    }
</script>
<div id="form-container">
    <h1>Form</h1>
    <form action="" method="post" name="form" onsubmit="return validate()">
        <label for='name' class="form-el">Name:</label>
        <input id='name' type='text' name="name" class="form-el">
        <label for='age' class="form-el">Age:</label>
        <input id='age' type='number' name="age" class="form-el">
        <button name="button">Submit</button>
    </form>
</div>