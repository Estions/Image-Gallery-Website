<?php
include 'databaseConnect.php';

$query ="
SELECT
    img_rownum, img_name, img_author, img_path
FROM
    (
    SELECT
        ROW_NUMBER() OVER(ORDER BY img_name) AS img_rownum, img_name, img_author, img_path
    FROM
    images
    ) q
WHERE
    img_rownum > q1 AND img_rownum <= q2
";

//I'm using q1 and q2 to send out which rownums to get
$q1 = $_GET['q1']; //Get q1 from link
$q2 = $_GET['q2']; //Get q2 from link

//The method i found online doesn't work, so i'm just replacing them in starting query
$query = str_replace("q2",$q2,str_replace("q1",$q1,$query));

//Fetch data from database on $query
$queryResult = $dbConnection->query($query);

//Check and handle query failure
if($queryResult === false)
{
    echo "<p>Query failed: ".$dbConnection->error."</p>";
    exit;
} 
else
{
    //Just an implementation of foreach i got from uni
    while($rowObj = $queryResult->fetch_object())
    {
    echo "|
    <div class='container my-3 mx-0 p-0 text-center bg-main-body'>
        <img class='img-fluid m-0' src={$rowObj->img_path} alt={$rowObj->img_author}></img>
        <p class='text-center my-0 mx-0 fs-5 text-break'>{$rowObj->img_name}</p>
        <p class='text-end my-1 mx-0 fs-6'>{$rowObj->img_author}</p>
    </div>";
    }
}

//close connections
$queryResult->close();
$dbConnection->close();
?>