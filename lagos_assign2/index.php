<?php include "inc/html-top.inc"; ?>
	
	<body>
	<section class ="banner">
	<header>
		<a href = "index.php">
		<h1> Assignment 2 : Team Lagos </h1>
  	    <img src="images/Lagos.jpg" alt=" Lagos ">
  	    </a>
    	<p> Africa's Model Megacity </p>	
    	<?php include "inc/nav.inc"; ?>
  	</header>
  	</section>

		<div class = "container">

		<section class = "hero">
			<h2> Meet the Team </h2>
 
			<div class = "slider">

				<img src="images/olatunde.jpeg" alt = "Olatunde Oshunlaja" />
				<img src="images/xerox.jpg" alt = "Fiyinfoluwa Oluyinka" />
				<img src="images/prosper.png" alt = "Prosper Feya" />

			</div>

			<div id = "accordion">


				<h2> Information Architect </h2>
				<p> Fiyin <strong> (born November 29, 1995) </strong> is a strong research professional pursuing a Bachelor’s Degree in Electrical and Computer Engineering from University of Rochester. Over the years, he has developed strong analytical skills from tackling various projects ranging from circuit analysis and design, to probability and statistics. He is very interested in Financial Technology, Electronics Hardware Design, Power, and pretty much any opportunity for him to use technology as a tool to improve business performances, mitigate risk, and provide innovative solutions to meet project demands. <a href= "fiyin.php"> Read more about Fiyin... </a> 
				</p>


				<h2> Coder </h2>
				<p> <strong> Ola </strong> (born September 7, 1995) is a Junior at the University of Rochester majoring in Business and minoring in Computer Science. He loves traveling the world and experiencing new cultures. An interesting tidbit about him is that he has been to school in three different countries Nigeria, England and now the US. He speaks two languages English and Yoruba.<a href= "olatunde.php"> Read more about Ola... </a> </p>
				

				<h2> Design Artist </h2>
				<p> Prosper <strong>(born June 20, 1995)</strong> is a senior at the University of Rochester, currently studying Electrical and Computer Engineering with a concentration in Semiconductor Devices.He also minors in Computer Science (Human-Computer Interaction) and Theater. He understands at the core of your Hardware/Electrical Engineering program one values enthusiasm and willingness to drive innovation. As an undergrad, He shares similar values at heart and this has been shown through design projects he has worked on.<a href= "prosper.php"> Read more about Prosper... </a>  </p>

			</div>

		</section>

		<?php include "inc/footer.inc"; ?>

		</div>



	<?php include "inc/scripts.inc"; ?>

	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<script type = "text/javascript" src="sss/sss.min.js"></script>
	<script type = "text/javascript">

		$( "#accordion" ).accordion({
			heightStyle: "content"
		});
		$('.slider').sss({
			slideShow : true, 
		});

	</script>


	</body>




