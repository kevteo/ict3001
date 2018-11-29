<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Basic Statistics</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon fa-diamond"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1 style='font-size:85px;'>Basic Statistics</h1>
					<p>Everything is data and only with statistics,we can interpret data accurately.</p><a href=#lessonOverview class="button">Lesson Overview</a>
					<div id='introduction'>
					</br>
					<p>John is an aspiring entrepreneur who wants to start his own waffles business. However, he is faced with many difficulties when making decisions. Fortunately, his friend Ben is a statistician and he is there to provide all the help John needs.
					<br><br>
					Navigate around to find out the story of John and learn more about how statistics can help make better decisions from data in life!</p>
					</div>
					<img class="homeImg" src='./images/img1.jpeg'>
					<!-- <img src='./images/img1.jpeg' width='100%' height='100%'> -->
				<br><br>
				<a href=#introVideo class="button">Start The Waffle Business</a>
				
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="#intro">Sampling Distribution</a></li>
					<li><a href="#work">T-Distribution</a></li>
					<li><a href="#about">Central Limit Theorem</a></li>
					<li><a href="#contact">Inferential Statistics</a></li>
					<!--<li><a href="#elements">Elements</a></li>-->
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main">
		<!-- Introduction Video -->
			<article id="introVideo">
			<h2 class="major">How It All Started</h2>
					<span class="image mainIntro"><iframe height="600px" width="100%" src="https://www.youtube.com/embed/dk9N349dGao" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
			</article>
			
			<!-- Lesson Overview -->
			<article id="lessonOverview">
				<h2 class="major">Lesson Overview</h2>
					<ol>
						<li>Use descriptive statistic methods to organize, summarize and present data</li>
						<li>Use statistical models and methods to compute statistical measures</li>
						<li>Interpret and explain significance of statistical measures</li>
						<li>Apply statistical analysis to case studies and employ results to facilitate decision making</li>
					</ol>
			</article>

			<!-- Intro -->
			<article id="intro">
				<h2 class="major">Introduction to statistics population and sample distribution</h2>
				<div class='tutorial'>
					<table style="border='3px solid white'">
						<tr>
							<th>Population Parameter</th>
							<th>Sampling Distribution</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
					</table>
					<p>
						Population parameter in Statistics is the set of all the values of a quantity of interest. 
						A population parameter is a number that summarizes an attribute of the population.
					</p>
					<br/>
					<p>The population parameter formula given by:</p>
					<img src='./images/formula1.png' width='40%' height='40%'>
					<p>Sample distribution in Statistics is a subset of population and is the set of value you actually use in your estimation.</p>
					<img src='./images/img2.png' width='40%' height='40%'>
					<p>The sample distribution formula given by: </p>
					<img src='./images/img3.png' width='40%' height='40%'>
					<span class="image main"><iframe width="100%" height="600px" src="https://www.youtube.com/embed/SFPWF42K8ME" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
				</div>
				<div class='question'>
					<input type="text" class="input" id="input1_1">
					<input type="text" class="input" id="input1_2">
					<input type="text" class="input" id="input1_3">
					<br/>
					<button id='button1'>Submit Answer!</button>
				</div>
				
				<span class="image main"><iframe width="100%" height="600px" src="https://www.youtube.com/embed/0N1qnW49VXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
			</article>

			<!-- Work -->
			<article id="work">
				<h2 class="major">T-Distribution</h2>
				<div class='tutorial'>
					<p>
						In practice, we rarely know the population variance required for the Central Limit Theorem. Fortunately, there is another model for sampling distribution called T-distribution. T-distribution is a probability distribution that is used to estimate population parameters when the sample size is small or when the population variance is not known.
						A T distribution resembles a normal distribution. However, it differs from normal distribution by its degrees of freedom. A T distribution has a smaller number of independent observations, typically  n<30. Hence, when the sample is not large enough, or the population variance is unknown, a t-statistic formula should be calculated as a basis for the T distribution.
						<br/><br/>
						The T-statistic formula is given by:<br/>
						t = [ x - μ ] / [ s / sqrt( n ) ]
						<br/><br/>
						where <br/>
						x = sample mean <br/>
						μ = population mean <br/>
						s = standard deviation <br/>
						n = sample size <br/>
						<br/><br/>
						The degree of freedom (df) is given by = n - 1
						<br/><br/>
						Similar to normal distribution, it is too complicated to compute probabilities (area under curve) of a T-distribution. Hence, a pre-computed table called the t-table is needed.
						<br/><br/>
						<img src='./images/t-dist_table.jpg' height='50%' width='50%'>
					</p>
				</div>
				<div class='question'>
					<p>
						John has an average sale per day of 30 waffles.
						After conducting a 15-day sample testing, John waffles sales per day is 29 waffles with a standard deviation of 5.
						Find the probability that of 15 days selected, John average sales of waffles are no more than 29 waffles.
					</p>
					<input type="text" class="input" id="input2">
					<br/>
					<button id='button2'>Submit Answer!</button>
				</div>
				<span class="image main"><iframe width="100%" height="500px" src="https://www.youtube.com/embed/l_4XGCIa81w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>

			</article>

			<!-- About -->
			<article id="about">
			<h2 class="major">Central Limit Theorem</h2>
				<div class='tutorial'>
					<p>In Central Limit Theorem, for sufficiently large samples with size greater than 30, the shape of the sampling distribution will become more and more like a normal distribution. </p>
					<p>If there are large enough set of samples then the sampling distribution of mean approaches normal distribution.</p>
					<p>For example, if we put histograms of an average of five fair, 6-sided dice rolls together, this is what it will look like when the number of experiments grows:</p>
					<img src='./images/gif1.jpeg' width='50%' height='50%'>
				</div>
				<div class='question'>
					<p>John met up with a cola supplier which uses a filling machine that fills cans with 12oz of cola. <br/>Suppose that the fills are known to have a mean of 12.1oz and a standard deviation of 0.2oz. <br/>What is the probability that the average fill for a 36-pack of cola is less than 12oz?</p>
					<input type="text" class="input" id="input3">
					<br/>
					<button id='button3'>Submit Answer!</button>
				</div>
				<span class="image main"><iframe width="100%" height="500px" src="https://www.youtube.com/embed/ykH7uoEeOCk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
			</article>

			<!-- Contact -->
			<article id="contact">
			<h2 class="major">Inferential Statistics</h2>
				<div class='tutorial'>
					<p>Inferential statistics takes data from a sample and makes inferences about the larger population from which the sample was drawn.</p>
					<p>The process for performing inferential statistical study consists of four steps:</p>
					<img src='./images/tut4_1.png' width='50%' height='50%'>
					<p>Curiosity question is being formulated as one of five questions about population parameter as follows:</p>
					<img src='./images/tut4_2.png' width='50%' height='50%'>

					<p>There are two basic methods for making inferences about population parameters:</p><br/>
					<h3>1.	Estimation</h3>
					<p>Estimation is further broken into two: Point and Interval estimation</p>
					<p>Point estimate: a single number to estimate parameter</p>
					<p>Interval estimate: a range to contain the population parameter</p>
					<br/>

					<h3>2.	Statistical hypothesis</h3>
					<p>There are two theories in this method of inference:</p>
					<p>The <b>alternative hypothesis</b> is a hypothesis proposed by the experimenter The <b>null hypothesis</b> is the negation of the alternative hypothesis</p>
					<p>A decision has to be made to accept or reject a value of population parameter</p>
				</div>
				<div class='question'>

				<!--
				<input type="text" class="input" id="input4">
				<br/>
				<button id='button4'>Submit Answer!</button>
				-->
				</div>
				<span class="image main"></span>
			</article>


		</div>

		<article id='visitDiscord' class='active'>
			<h2>Group Collaborative Learning</h2>
			<hr style='margin: 1px;'>
			<h3><span class='underline'>What have we learnt so far?</span></h3>
			<p>
				We found out how statistics can be applied to the real world by following John on his attempt to start
				his own waffle shop. With the knowledge about Population Distribution, T-Distribution, Central Limit Theorem and Inferential Statistics
				and practiced Population Distribution we are now going to move on to the next part of the activity.
			</p>
			<h3><span class='underline'>Why use Discord?</span></h3>
			<p>
				Asynchronous Learning is the idea that students the should be able to learn the same material at different times and location.
				However, this would not be sufficient to replicate the experience that students can gain from the interactions and discussions
				in a classroom with both their lecturers and fellow classmates. In order to digitalize this classroom experience we are going to participate
				in a group collaborative learning activity on an application called DISCORD. The DISCORD application enables text, image, video and audio
				communication between users in a chat channel.
			</p>
			<h3><span class='underline'>How will it be conducted?</span></h3>
			<p>
				Students will be split into groups and will be given challenging real world problem. Students will be invited to join the DISCORD server
				and be assigned their group roles. With the group roles they will be able join the appropriate text and voice channels where they can participate
				in the group activity to solve the problem.
			</p>
			<button id='discordLink'>Discord Invitation</button>
		</article>

		<!--
		<footer id="footer">
			<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
		</footer>
		-->


	</div>

	<!-- BG -->
	<div id="bg"></div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/myjavascript.js"></script>
	<script>init()</script>
</body>

</html>
