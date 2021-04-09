<?php
include 'databaseConnect.php';
$query ="
SELECT RowNum, img_name, img_author, img_path
FROM(
SELECT ROW_NUMBER() OVER(ORDER BY img_name) AS RowNum,
        img_name, img_author, img_path
FROM images
) q
WHERE RowNum > q1 AND RowNum <= q2";
$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$query = str_replace("q2",$q2,str_replace("q1",$q1,$query));
$queryResult = $dbConnection->query($query);
//check and handle query failure
if($queryResult === false)
{
    echo "<p>Query failed: ".$dbConnection->error."</p>";
    exit;
} 
else
{
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
$queryResult->close();
$dbConnection->close();
?>