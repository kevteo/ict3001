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


<!-- Title -->
<div class="pimg1">
	<div class="ptext">
		<span><p id='header' class="border">Basic Statistics</p><br/><br/><p class="border">Making Decisions From Data In Life</p></span>
	</div>
</div>


<!-- Intro -->
<section class="section section-light">
	<h2>CLICK BAITTTTTTTTTTTTTTTTTTTTTTT</h2><br/><br/>
	<h2>Lesson Objectives</h2>
	<p>Students should...</p>
	<ul>
		<li>Understand the relation between population parameter and sample statistics</li>
		<li>Know two models for sampling distribution (Normal distribution, t-distribution)</li>
		<li>Apply the methods for making inferences based on the sample data</li>
	</ul><br/>
	<video width="1200" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 1 -->
<section class="section section-light" id='topic1'>
	<h2>Topic 1</h2>
	<p>Tutorial</p><br/><br/><br/>
	<h3>Question</h3>
	<div class="form-group">
		<input type='text' class="form-control" id='input1-1' placeholder="Enter your answer here!"><br/>
		<input type='text' class="form-control" id='input1-1' placeholder="Enter your answer here!"><br/>
		<input type='text' class="form-control" id='input1-3' placeholder="Enter your answer here!"><br/>
		<button id='button1'>Submit Answer!</button>
	</div><br/><br/><br/>
	<video width="1200" height="760" controls></video>
	<video width="1200" height="760" controls></video>
	<video width="1200" height="760" controls></video>
	<video width="1200" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 2 -->
<section class="section section-light" id='topic2'>
	<h2>Topic 2</h2>
	<p>Tutorial</p><br/><br/><br/>
	<h3>Question</h3>
	<div class="form-group">
		<input type='text' class="form-control" id='input2' placeholder="Enter your answer here!"><br/>
		<button id='button2'>Submit Answer!</button>
	</div><br/><br/><br/>
	<video width="1200" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 3 -->
<section class="section section-light" id='topic3'>
	<h2>Topic 3</h2>
	<p>Tutorial</p><br/><br/><br/>
	<h3>Question</h3>
	<div class="form-group">
		<input type='text' class="form-control" id='input3' placeholder="Enter your answer here!"><br/>
		<button id='button3'>Submit Answer!</button>
	</div><br/><br/><br/>
	<video width="1200" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 4 -->
<section class="section section-light" id='topic4'>
	<h2>Topic 3</h2>
	<p>Tutorial</p>
	<div class="form-group">
		<input type='text' class="form-control" id='input4' placeholder="Enter your answer here!"><br/>
		<button id='button4'>Submit Answer!</button>
	</div><br/><br/><br/>
	<video width="1200" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Closing -->
<div class="pimg1" id='closing'>
	<div class="ptext">
	<span class="border">VISIT DISCORD CHANNEL ...</span>
</div>








<!-- Side Navbar / Progress Indicator -->
<div class="icon-bar">
	<a href="#" onclick="scrollToID('topic1')"><img src='img/navbarIcon1.jpg'></a>
	<a href="#" onclick="scrollToID('topic2')"></a>
	<a href="#" onclick="scrollToID('topic3')"></a>
	<a href="#" onclick="scrollToID('topic4')"></a>
</div>
<div id='progressBarOverlay'></div>


</body>
</html>