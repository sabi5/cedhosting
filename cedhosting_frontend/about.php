<?php
session_start();
require "header.php";

    
require "Dbconnection.php";
require "Product.php";


$Product = new Product();
$Connection = new Dbconnection();

$catList = $Product->categoryList($Connection->con);
 ?>
<title>About page</title>
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
		
			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

		});
	</script>						
<!--script-->
</head>
<body>
<!---header--->
<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><span style ="color : #e7663f">Ced</span> <span style ="color : #585CA7">Hosting</span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li class="active"><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
									<? foreach ($catList as $value){
											?>
											<li><a href="linuxhosting.php"><?php echo $value['prod_name'];?></a></li>
											<!-- <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
											<li><a href="windowshosting.php">Windows Hosting</a></li>
											<li><a href="cmshosting.php">CMS Hosting</a></li> -->
										<?}?>
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
		<!--about--->
				<div class="content">
					<div class="about-section">
						<div class="container">
							<h2>about us</h2>
							<div class="about-grids">
								<div class="col-md-3 about-grid">
									<img src="images/p4.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-9 about-grid1">
									<h4>Mes cuml dia sed inenias ingerto lot aliiqtes</h4>
									<p>Nemo enim ips voluptatem voluptas sitsper natuaut odit aut fugit consequuntur magni dolores eosqratio nevoluptatem nesciunt lacusueni ascet dolingerto aliiqt sit amet eism com odictor ut ligulate cot ameti dapibu. Nemo enim ipsam voluptatem voluptas sit. Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui rationevoluptatem nesciunt. Neque poMes cuml dia sed in lacusut eniascet ingerto aliiqt es site amet .</p>
									<div class="about-bottom">
										<div class="col-md-6 about-bottomgrid">
											<p>Ticdu nt mtsent justo dolor losubo ltiissim commete pulvinar ac. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus Duis ultricies.  </p>
											<p>Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis ultricies pharetra.</p>
										</div>
										<div class="col-md-6 about-bottomgrid1">
										<img src="images/p5.jpg" class="img-responsive" alt="/">
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!--about--->
					<!--whatdo--->
					<div class="whatdo">
						<div class="container">
							<h3>What We Do?</h3>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!--whatdo--->
					<!--solution--->
						<div class="solution-section">
							<div class="container">
									<h3> our solution</h3>
								<div class="solution-grids">
									<div class="col-md-4 solution-grid">
										<div class="solution">
										<a href="single.html" class="mask"><img src="images/p6.jpg" class="img-responsive zoom-img" alt=""/></a>
											<h4>Vestibulum iaculis</h4>
											<p>lacinia / dictum</p>
										</div>
									</div>
									<div class="col-md-4 solution-grid">
										<div class="solution">
											<a href="single.html" class="mask"><img src="images/p7.jpg" class="img-responsive zoom-img" alt=""/></a>
											<h4>elementum velit</h4>
											<p>Fusce / uismod</p>
										</div>
									</div>
									<div class="col-md-4 solution-grid">
										<div class="solution">
											<a href="single.html" class="mask"><img src="images/p8.jpg" class="img-responsive zoom-img" alt=""/></a>
											<h4>adipiscing elit</h4>
											<p>consequat / ante</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
					<!--solution--->
					<!--statistics--->
						<div class="statistics">
							<div class="container">
								<h3>statistics</h3>
								<div class="statistics-grids">
									<div class="col-md-3 statistics-grid">
										<div class="statistic">
											<h4>65%</h4>
											<h5>Lorem ipsum dolor</h5>
											<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
										</div>
									</div>
									<div class="col-md-3 statistics-grid">
										<div class="statistic">
											<h4>75%</h4>
											<h5>Lorem ipsum dolor</h5>
											<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
										</div>
									</div>
									<div class="col-md-3 statistics-grid">
										<div class="statistic">
											<h4>85%</h4>
											<h5>Lorem ipsum dolor</h5>
											<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
										</div>
									</div>
									<div class="col-md-3 statistics-grid">
										<div class="statistic">
											<h4>95%</h4>
											<h5>Lorem ipsum dolor</h5>
											<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					<!--statistics--->
				</div>
			
				<?php require "footer.php";?>
			
</body>
</html>