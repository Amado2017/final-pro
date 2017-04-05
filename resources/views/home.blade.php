<!doctype html>
<html lang="en">
<head>
 	<title>{{$nick}}</title>
 	<meta name="viewport" content="width = device-width initial-scale = 1">
 	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
</head>

 <body>
	 <div class="container-fluid">
	 	<nav class="navbar navbar-default" style="margin-bottom:0;">
		 	<div class="navbar-header">
		 	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		 	            <span class="sr-only">Toggle navigation</span>
		 	            <span class="icon-bar"></span>
		 	            <span class="icon-bar"></span>
		 	            <span class="icon-bar"></span>
		 	    </button>
		 		<a href="#" class="navbar-brand">Assignment 1</a>
		 	</div>

		 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 		<ul class="nav navbar-nav">
		 			<li class="active">
			 			<a href="home.blade.php">Home<span class="sr-only">(current)</span></a>
		 			</li>
		 			<li><a href="compare.html">Chart</a></li>
		 			<li><a href="about.html">About Us</a></li>
		 			<li><a href="question.html">Participate</a></li>
		 		</ul>
		 		<form class="navbar-form navbar-left" role="search">
	 		        <div class="form-group">
	 		          <input type="text" class="form-control" placeholder="Search">
	 		        </div>
	 		        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
		 		</form>
		 	</div>
	 	</nav>
        <div class="row slider">
	 		<div class="carousel slide" data-ride="carousel" id="carousel-example">
	 			<ol class="carousel-indicators">
	 				<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
 				    <li data-target="#carousel-example" data-slide-to="1"></li>
 				    <li data-target="#carousel-example" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="images/1.jpg" alt="slide1" width="100%">
	 					<div class="carousel-caption">
	 						<h3>Slide 1</h3>
	 						<p>this is description of slide 1</p>
	 					</div>
	 				</div>

	 				<div class="item">
	 					<img src="images/2.jpg" alt="slide1" width="100%">
	 					<div class="carousel-caption">
	 						<h3>Slide 2</h3>
	 						<p>this is description of slide 2</p>
	 					</div>
	 				</div>

	 				<div class="item">
	 					<img src="images/3.jpg" alt="slide1" width="100%">
	 					<div class="carousel-caption">
	 						<h3>Slide 3</h3>
	 						<p>this is description of slide 3</p>
	 					</div>
	 				</div>

	 				<a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
	 				   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	 				   <span class="sr-only">Previous</span>
	 				 </a>
	 				 <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
	 				   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	 				   <span class="sr-only">Next</span>
	 				 </a>
	 			</div>
	 		</div>
        </div>
	 	<div class="row main_content" style="margin-top:10px;">
	 		<div class="col-sm-8 content" >
	 			<div class="row">
	 				<div class="col-sm-12">
		 				<div class="thumbnail">
		 					<img src="images/t1.jpg" alt="image 1" height="150px" width="150px" style="float:left;margin:5px;">
		 					<div class="caption">
			 					<h3>News 1</h3>
			 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut saepe dolore, perferendis id quis quia modi voluptatum, numquam! Atque dolorum eligendi, odio, quam architecto quae fuga, officia voluptates recusandae impedit hic incidunt repellendus eveniet. Doloribus eligendi amet accusantium expedita eius ut voluptatum veniam dignissimos minus.</p>
			 					<span><a href="#">Read More>></a></span>
		 					</div>
		 				</div>
	 				</div>
	 			</div>
	 			<div class="row">
	 				<div class="col-sm-12">
	 					<div class="thumbnail">
		 					<img src="images/t2.jpg" alt="image 1" height="150px" width="150px" style="float:left;margin:5px;">
		 					<div class="caption">
			 					<h3>News 2</h3>
			 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut saepe dolore, perferendis id quis quia modi voluptatum, numquam! Atque dolorum eligendi, odio, quam architecto quae fuga, officia voluptates recusandae impedit hic incidunt repellendus eveniet. Doloribus eligendi amet accusantium expedita eius ut voluptatum veniam dignissimos minus.</p>
			 					<span><a href="#">Read More>></a></span>
		 					</div>
		 				</div>
	 				</div>
	 			</div>

	 		</div>
	 	
		 	<aside class="col-sm-4" >
 				<div class="thumbnail">
 					<div class="caption">
	 					<h3>Latest News</h3>
				 		<div class="news">
					 		<a href="#" style="text-decoration:none;"><h4 style="color:#31708f;">News 1</h4></a>
					 		<p>This is news 1 which will be retrived from database</p>
					 		<a href="#" style="text-decoration:none;"><h4 style="color:#31708f;">News 2</h4></a>
					 		<p>This is news 2 which will be retrived from database</p>
				 		</div>
 					</div>
 				</div>
		 				 		
 				<div class="thumbnail">
 					<div class="caption">	
	 					<h3>Ads</h3>
				 		<div class="carousel slide" data-ride="carousel" id="carousel-example">
				 			<div class="carousel-inner" role="listbox">
				 				<div class="item active">
				 					<img src="images/1.jpg" alt="slide1" width="100%">
				 					<div class="carousel-caption">
				 						<a href="#" class="btn btn-primary">Visit Site</a>
				 					</div>
				 				</div>

				 				<div class="item">
				 					<img src="images/2.jpg" alt="slide1" width="100%">
				 					<div class="carousel-caption">
				 						<a href="#" class="btn btn-primary">Shop</a>
				 					</div>
				 				</div>

				 				<div class="item">
				 					<img src="images/3.jpg" alt="slide1" width="100%">
				 					<div class="carousel-caption">
				 						<a href="#" class="btn btn-primary">Buy now</a>
				 					</div>
				 				</div>
				 			</div>
				 		</div>
 					</div>
 				</div>
		 				 		
		 	</aside>
	 	</div>

	 	<footer class="row navbar-inverse" style="color:white;text-align:center;">
	 		<div class="col-sm-12">&copy Web-programing I,by Group name</div>
	 	</footer>
	 </div>
	 <script src="js/jquery.js"></script>
	 <script src="js/bootstrap.js"></script>
 </body>

</html>
