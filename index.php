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
    <?php
      $dir = "./images/";
      $images = array();
      // Open a directory, and read its contents
      if (is_dir($dir)){
        if ($dh = opendir($dir)){
          while (($file = readdir($dh)) !== false){
            if(str_contains($file,".jpg"))array_push($images,$file);
          }
          asort($images);
          closedir($dh);
        }
      }
    ?>
    <div class="container"> <!-- Gallery Container -->
      <div class="row g-0"> <!-- Name Row Container -->
        <h1 class="">Gallery</h1>
      </div>
      <div class="row g-5"> <!-- Gallery Row Container -->
        <div class="col"> <!--Gallery Column 1 -->
          <?php
            for($i = 1 ; $i < count($images)+1 ; $i++)
            if($i % 2 == 0)
            {
              $name = pathinfo($images[$i], PATHINFO_FILENAME);
              $path = $dir . $name . "." . pathinfo($images[$i], PATHINFO_EXTENSION);
              echo "<div class='container-fluid'>";
              echo "<img src='$path' class='img-fluid d-block mx-auto my-0 p-0' alt='Img $i'>";
              echo "<h3 class='container-fluid bg-main-body txt-color-main'>$name</h3></div>";
            }
          ?>
        </div>
        <div class="col"> <!--Gallery Column 2 -->
          <?php
            for($i = 0 ; $i < count($images) ; $i++)
            if($i % 2 !== 0)
            {
              $name = pathinfo($images[$i], PATHINFO_FILENAME);
              $path = $dir . $name . ".jpg";
              echo "<div class='container-fluid m-0'>";
              echo "<img src='$path' class='img-fluid d-block mx-auto my-0 p-0' alt='Img $i'>";
              echo "<h3 class='container-fluid bg-main-body txt-color-main'>$name</h3></div>";
            }
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