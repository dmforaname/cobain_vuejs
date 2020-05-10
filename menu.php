<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  margin-bottom: 20px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

hr{
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
}
</style>

<?php
  $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  $s3 = $uriSegments[3];
?>

<div class="topnav">
  <a href="./" class="<?= ($s3 == '')?'active':'' ?>">Index</a>
  <a href="lat1.php" class="<?= ($s3 == 'lat1.php')?'active':'' ?>">Level 1</a>
</div>
