<?php
    //database connection info
    $dbConnection = new mysqli
    (
        "localhost",
        "root",
        "",
        "cvtest"
    );
    //handle connection failure
    if ($dbConnection->connect_error)
    {
        echo "<p>Connection failed: ".$dbConnection->connect_error."</p>";
        exit;
    }
?>