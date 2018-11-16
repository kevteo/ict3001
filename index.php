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
<div class="pimg1small"></div>

<!-- Intro -->
<section class="section section-light">
	<h2>CLICK BAITTTTTTTTTT</h2><br/><br/>
	<h2>Lesson Objectives</h2>
	<div id='moduleOverview'>
		<p>Students should...</p>
		<ul>
			<li>Understand the relation between population parameter and sample statistics</li>
			<li>Know two models for sampling distribution (Normal distribution, t-distribution)</li>
			<li>Apply the methods for making inferences based on the sample data</li>
		</ul>
	</div><br/>
	<video width="90%" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 1 -->
<section class="section section-light" id='topic1'>
	<h2>Topic 1</h2>
	<p>Tutorial</p><br/><br/><br/>
	<div class='question'>
		Question
	</div>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input1-1">
	</div>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input1-2">
	</div>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input1-3">
	</div><br/>
	<button id='button2'>Submit Answer!</button><br/><br/><br/>
	<video width="90%" height="760" controls></video>
	<video width="90%" height="760" controls></video>
	<video width="90%" height="760" controls></video>
	<video width="90%" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 2 -->
<section class="section section-light" id='topic2'>
	<h2>Topic 2</h2>
	<p>Tutorial</p><br/><br/><br/>
	<h3>Question</h3>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input2">
	</div><br/>
	<button id='button2'>Submit Answer!</button><br/><br/><br/>
	<video width="90%" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 3 -->
<section class="section section-light" id='topic3'>
	<h2>Topic 3</h2>
	<p>Tutorial</p><br/><br/><br/>
	<h3>Question</h3>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input3">
	</div><br/>
	<button id='button2'>Submit Answer!</button><br/><br/><br/>
	<video width="90%" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Topic 4 -->
<section class="section section-light" id='topic4'>
	<h2>Topic 4</h2>
	<p>Tutorial</p>
	<div class="input-group input-group-lg col-sm-3 answer">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-lg">Answer</span>
		</div>
  		<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="input4">
	</div><br/>
	<button id='button2'>Submit Answer!</button><br/><br/><br/>
	<video width="90%" height="760" controls></video>
</section>
<div class="pimg1small"></div>


<!-- Closing -->
<div class="pimg1" id='closing'>
	<div class="ptext">
	<span class="border">VISIT DISCORD CHANNEL ...</span>
</div>




<!-- Modal (If answer is wrong) -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      	<!-- Modal content-->
      	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body" id='modal-body'>
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
</div>



<!-- Side Navbar / Progress Indicator -->
<div class="icon-bar">
	<a href="#" onclick="scrollToID('topic1')"><img src='img/waffle-icon-dribbble.png'></a>
	<a href="#" onclick="scrollToID('topic2')"><img src='img/waffle-icon-dribbble.png'><</a>
	<a href="#" onclick="scrollToID('topic3')"><img src='img/waffle-icon-dribbble.png'><</a>
	<a href="#" onclick="scrollToID('topic4')"><img src='img/waffle-icon-dribbble.png'><</a>
</div>
<div id='progressBarOverlay'></div>


</body>
</html>