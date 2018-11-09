<?php
session_start(); // Keep only if necessary

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Statistics</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
	<script>
		init();
	</script>
</head>
<body>

<!-- Side Navbar / Progress Indicator -->
<div class="icon-bar">
	<a href="#" onclick="scrollToID('topic1')"><img src='img/navbarIcon1.jpg'></a>
	<a href="#" onclick="scrollToID('topic2')"></a>
	<a href="#" onclick="scrollToID('topic3')"></a>
	<a href="#" onclick="scrollToID('topic4')"></a>
</div>

<!-- Header -->
<div class='container-fluid'>
	<h1>Basic Statistic</h1>
	<h2>Making Decisions From Data In Life</h2>
	<p>Module Overview</p>
</div>

<!-- Topic 1 -->
<div class='container-fluid'>
	<h1>Basic Statistic</h1>
	<p>Module Overview</p>
</div>

<!-- Topic 2 -->

<!-- Topic 3 -->

<!-- Topic 4 -->

<!-- Footer -->


<?php
// for ($i=0; $i < 50; $i++) {
// 	echo "<p>111111</p>";
// 	echo "<hr>";
// }

// echo "<p id='hello'>THIS</p>";

// for ($i=0; $i < 50; $i++) {
// 	echo "<p>abcdefegsdasd</p>";
// 	echo "<hr>";
// }
?>



</body>
</html>
