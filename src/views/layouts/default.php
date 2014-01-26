<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta charset="utf-8">
		
		<title>Toadsuck Skeleton :: <?=$this->page_title;?></title>

		<!-- Bootstrap -->
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/yeti/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<link href="//fonts.googleapis.com/css?family=Droid+Sans|Advent+Pro|Raleway" rel="stylesheet" type="text/css">

		<style>
		div.page {
			background-color:#fff;
			margin-top:40px;
			margin-bottom:10px;
			padding:0 20px;
		}
		
		@media(min-width:768px) {
			div.page {
				margin-top:60px;
				margin-bottom:10px;
				padding:20px;
			}
		}
		</style>
		
		</head>
	<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Toadsuck Skeleton</a>
			</div>
	
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li id="about-tab"><a href="#">Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>  	
	</div>

	<div class="container page">
		
		<div class="row">
			<div class="content">
				<?=$this->child()?>
			</div>
		</div> <!--//row-->

	</div> <!--// page-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	</body>

</html>