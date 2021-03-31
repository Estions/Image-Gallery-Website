<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS-->
    <link href="css/styles-main.css" rel="stylesheet">

    <title>Template Webpage</title>
  </head>
  <body class = "bg-gradient"> <!-- Body -->
    <div class="container"> <!-- Gallery Container -->
      <div class="row g-0"> <!-- Gallery Row Container -->
        <div class="col p-3 border-l bg-cc-linen rounded-end rounded-5"> <!--Gallery Column 1 -->
        <?php
          $imgArray = array();
          $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
          while(!feof($myfile))
          {
            $line = fgets($myfile);
            array_push($imgArray,$line);
          }
        ?>
        <?php
          for($i = 0 ; $i < count($imgArray) ; $i++)
          if($i % 2 == 0) echo "<p>".$imgArray[$i]."</p>";
        ?>
        </div>
        <div class="col p-3 border-r bg-cc-linen rounded-start rounded-5"> <!--Gallery Column 2 -->
        <?php
          for($i = 0 ; $i < count($imgArray) ; $i++)
          if($i % 2 !== 0) echo "<p>".$imgArray[$i]."</p>";
        ?>
        </div>
        </div>
      </div>
    <!-- Bootstrap Bundle with Popper -->      
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"> 
    </script>
  </body>
</html>