<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Solar System</title>
    <link rel="stylesheet" href="asset/css/home.css">
    <link rel="stylesheet" href="asset/css/nav.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>

  <?php include 'asset/inc/nav.php';?>
  <?php include 'asset/inc/header.php';?>

  <div id="page-container">
    <h2 id="planet-select">select a planet</h2>
      <div id="solar-system">
        <div><a id="sun" href="asset/subpages/sun.php"><img id="sun-img" src="asset/images/sun.png" alt="image of the sun"></a></div>
        <div><a id="mercury" href="asset/subpages/mercury.php"><img id="mercury-img" src="asset/images/mercury.png" alt="image of the mercury"></a></div>
        <div><a id="venus" href="asset/subpages/venus.php"><img id="venus-img" src="asset/images/venus.png" alt="image of the venus"></a></div>
        <div><a id="earth" href="asset/subpages/earth.php"><img id="earth-img" src="asset/images/earth.png" alt="image of the earth"></a></div>
        <div><a id="mars" href="asset/subpages/mars.php"><img id="mars-img" src="asset/images/mars.png" alt="image of the mars"></a></div>
        <div><a id="jupiter" href="asset/subpages/jupiter.php"><img id="jupiter-img" src="asset/images/jupiter.png" alt="image of the jupiter"></a></div>
        <div><a id="saturn" href="asset/subpages/saturn.php"><img id="saturn-img" src="asset/images/saturn.png" alt="image of the saturn"></a></div>
        <div><a id="uranus" href="asset/subpages/uranus.php"><img id="uranus-img" src="asset/images/uranus.png" alt="image of the uranus"></a></div>
        <div><a id="neptune" href="asset/subpages/neptune.php"><img id="neptune-img" src="asset/images/neptune.png" alt="image of the neptune"></a></div>
      </div>
  </div>
  <?php include 'asset/inc/footer.php';?>
  <script src="asset/js/hamburger.js"></script>
      <script src="asset/js/home.js"></script>
</body>
</html