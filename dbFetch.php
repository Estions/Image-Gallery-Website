<?php
include 'dbConnection.php';
$query ="
SELECT
    rn,
    image_number,
    image_name,
    image_path
FROM(
    SELECT
    	ROW_NUMBER() OVER(ORDER BY image_name) AS rn,
        image_number,
        image_name,
        image_path
	FROM `images`
) q
WHERE rn > q1 AND rn <= q2";
$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$query = str_replace("q2",$q2,str_replace("q1",$q1,$query));
$queryResult = $dbConnection->query($query);
//check and handle query failure
if($queryResult === false)
{
    echo "<p>Query failed: ".$dbConnection->error."</p>\n</body>\n</html>";
    exit;
} 
else
{
    while($rowObj = $queryResult->fetch_object())
    {
    /*
        echo "|<div class='container-fluid my-3 bg-main-body p-0'>
            <img class='img-fluid' src={$rowObj->image_path} alt={$rowObj->image_number}></img>
            <p class='text-center my-0 fs-3'>{$rowObj->image_name}</p>
            <p class='text-left m-1 fs-6'>{$rowObj->rn}</p>
           </div>";
    */
    if($rowObj == false) echo "YOU STUPID";
        echo "|<br><div class='container-fluid bg-main-body'>
        <p class='text-break'>{$rowObj->rn}</p>
        <p class='text-break'>{$rowObj->image_path}</p>
        <p class='text-break'>{$rowObj->image_number}</p>
        <p class='text-break'>{$rowObj->image_name}</p>
        </div>";
    }
}
$queryResult->close();
$dbConnection->close();
?>