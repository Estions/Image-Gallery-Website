<?php
    $dbConnection = new mysqli
    (
        "localhost",
        "root",
        "",
        "image_test"
    );
    if ($dbConnection->connect_error)
    {
        echo "<p>Connection failed: ".$dbConnection->connect_error."</p>";
        exit;
    }
?>