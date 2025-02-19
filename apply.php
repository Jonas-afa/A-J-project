<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Application Portal</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
             <li><a href="index.php">Home</a></li>
            <li><a href="#">About us</a>
            	<ul>
            		<li><a href="about.html">about company</a></li>
            		
            	</ul>
            </li>
            <li><a href="#">Countries</a>
				<ul>
					<li><a href="Country.html">Countries</a></li>
				</ul>
            </li>
            <li><a href="services.html">Services</a></li>
			<li><a href="apply.php">Aplly Now</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix" style="background-color: #990000;">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.php">
							<img src="images/logo.png" alt="Medigo by templatemo" style="height: 90px; width: 170px" >
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class="active"><a href="index.php">Home</a></li>
					            <li><a href="#">About us</a>
					            	<ul>
					            		<li><a href="about.html">About company</a></li>
					            		
					            	</ul>
					            </li>
					            <li><a href="#">Countries</a>
									<ul>
										<li><a href="Country.html">Countries</a></li>
									</ul>
					            </li>
					            <li><a href="services.html">Services</a></li>
					             <li><a href="apply.php">Aplly Now</a></li>
					            <li><a href="contact.html">Contact</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<div class="first-widget parallax" id="contact">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">APPLY NOW</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Modex</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<h3>START THE PROCESS NOW</h3>
							<p>you can apply by sending us your email adress,subject, your names and message through this application portal informing us that you want to study abroad so that we can contact you via Email adress, to start the process.</p><br>
							<h3>SCHOLARSHIPS</h3>
							<p>you can apply for Full funded scholarship or Partial scholarship in the country of your choice on our list of
							partener countries below.</p>
							<div class="contact-map">
			                    <div class="google-map-canvas" id="" style="height: 320px;">
			                    </div>
			                </div>
						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
                 <?php 
                                    $con=mysqli_connect('localhost','root','','modex');
                                       if(isset($_POST['submit'])){
                                        $name = $_POST['name'];

                                          $email = $_POST['email'];

                                          $subject = $_POST['subject'];

                                           $message = $_POST['message'];
 $q = "INSERT INTO `apply`(`name`,`email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

 $query = mysqli_query($con,$q);

    echo "<script>alert('Application submitted successfully...!')</script>";
    echo "<script>location.href='apply.php'</script>";


 }

?>

				<div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <h3>Send a Direct Application Message</h3>
	                        <div class="widget-inner">
                            <form action="#" method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                            <label for="name">Your Name:</label>
                                            <input type="text" name="name" id="name">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="email">Email Address:</label>
                                             <input type="text" name="email" id="email">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="subject">Subject/scholarship:</label>
                                             <input type="text" name="subject" id="subject">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="message">Your message:</label>
                                            <textarea name="message" id="message"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="mainBtn" id="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-12">
                                		<div id="result"></div>
                                	</div> <!-- /.col-md-12 -->
                                </div> <!-- /.row -->
                            </form>
                          </div> <!-- /.widget-inner -->
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb1.jpg" alt=""></a>
							</div>
							<div class="content">
								<span></span>
								<h4><a href="#">Study in Asia</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb2.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Study in USA</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb3.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Study in Europe</a></h4>
							</div>
						</div> <!-- /.last-post -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Apply to study in these countries</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
									<li>United Kingdom</li>
									<li>USA</li>
									<li>Canada</li>
									<li>Malaysia</li>
									<li>Europe</li>
									<li>Mauritious</li>
									<li>China</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li>Australia</li>
									<li>Cyprus</li>
									<li>South Africa</li>
									<li>Dubai</li>
									<li>India</li>
									<li>Turkey</li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						
						<ul id="flickr-feed" class="thumbs"></ul>
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title"> Talk with MODEX Education</h5>
						<p class="light-text">you can show us all your dreams here, we are able to transform the into reality, study Abroad become expert… </p>
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<footer class="site-footer" style="background-color: #990000;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li>Office line: + 491754431672</li>
							<li>Mobile: +491733766671</li>
							<li>Adress:Unterbibergstr.15a85579neubiberg</li>
							<li>MUNICH, GERMANY</li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy;  Modex  
                    | Study Abroad</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>
	<script>
        
    </script>


</body>
</html>