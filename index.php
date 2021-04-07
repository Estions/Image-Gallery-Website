<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS--> <link href="css/styles-main.css" rel="stylesheet">
    <title>eric_b custom Gallery</title>
  </head>

  <body class = "bg-gradient">
    <div class="container bg-seco-body p-1 py-0"> <!-- main container -->
      <div class="row border-bottom-5 g-0 bg-main-body"><p class="fs-1 text-center ">Gallery</p></div>  <!-- name row --> 
      <div class="row g-2"> <!-- gallery row -->
        <div class="col " id="col1"> <!-- gallery col 1 -->
        </div>
        <div class="col" id="col2"> <!-- gallery col 2 -->
        </div>
      </div>
      <div class="m-3 row border-all-5 g-0 bg-main-body"><button class="btn" onclick="manualLoadMore()">Load More</button></div>
      <div class="p-3 row border-top-5 g-0 bg-main-body" id="endC"><p class="fs-3 text-center">Images from Pixabay</p></div>  <!-- footer row --> 
    </div>
    <script src = "js/etools.js"></script>
    <!-- Bootstrap Bundle with Popper --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>