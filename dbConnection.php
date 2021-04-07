<?php
    $dbConnection = new mysqli
    (
        "localhost",
        "root",
        "",
        "cvtest"
    );
    if ($dbConnection->connect_error)
    {
        echo "<p>Connection failed: ".$dbConnection->connect_error."</p>";
        exit;
    }
?>