
<!doctype html>
<html lang="en">
    <head>
        <title>Dymolab Ventures | Home </title>

	   	<?php $docpath = $_SERVER['DOCUMENT_ROOT'];?>
        <?php include_once($docpath . "/php/head.php"); ?>
		<style> <?php include_once($docpath . "/css/timeline.css"); ?> </style>

		<?php include_once("php/googleanalytics.php") ?>
    <style><?php include_once($docpath . "/css/timeline.css"); ?></style>
    </head>
    <body class="btn-rounded">

		<div class="nav-container">
			<nav>
				<?php include_once("php/navbar.php") ?>
		    </nav>
		</div>


<div class="main-container">
		<section class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 parallax">
		        <ul class="slides">
		            <li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/cover11.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row text-center">
		                        <div class="col-md-offset-1 col-md-10">
		                            <h2 class="mb-xs-16">&nbsp;An unique opportunity for driven entrepreneurs to roll out a startup with a proven business model</h2>
		                            <p class="lead mb40">Apply for the next batch of  Dymolab Ventures program in Bogota, Colombia, starting early 2016. Apply as a team or as an individual, lead a project and roll out a startup with the help of professionals.</p>
		                            <a class="btn btn-lg" href="#">more information</a>
		                            <a class="btn btn-lg btn-filled" href="#">Apply to the program</a>
		                        </div>
		                    </div>

		                </div>

		            </li><li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/home3.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row text-center">
		                        <div class="col-md-10 col-md-offset-1">
		                            <h2 class="mb-xs-16">Meet Dymolab, the cleverest way<br class="hidden-sm"> to expand your startup to Latin America.</h2>
		                            <p class="lead mb40">We look for innovative projects in the Benelux, Germany and the UK, adapt them to local Latin American markets and reincubate them with talented local entrepreneurs.</p>
		                            <a class="btn btn-lg" href="#">More information</a>
		                            <a class="btn btn-lg btn-filled" href="#">For EU startups</a>
		                        </div>
		                    </div>

		                </div>

		            </li>
		        </ul>
		    </section>

        <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon et-line-globe"></i>
		                            <h4>We find startups with proven business models</h4>
		                        </div>
		                        <p>Dymolab experts search for high potential startups in Europe (focus on Germany, Benelux and the UK) that have a beta product or a market launch and have been able to make revenues and/or attract customers. We establish relationships to initiate a re-incubation process in Latin America.<br><br></p>
		                    </div>

		                </div>
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon et-line-megaphone"></i>
		                            <h4>We create a team of &nbsp;entrepreneurs</h4>
		                        </div>
		                        <p>We have an open call for our program in Bogota, Colombia, to attract motivated individuals or teams of entrepreneurs that would like to become co-founders of one of the Dymolab startups and go through the 6 month program with us. &nbsp;&nbsp;<br><br><br></p>
		                    </div>

		                </div>
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon et-line-beaker"></i>
		                            <h4>Reincubation of startups in Latin America</h4>
		                        </div>
		                        <p>In cooperation with the European startups, we replicate their concepts in Latin America. We create synergies by making use of the same corporate identity, intellectual property and digital infrastructure. The project would go through an initial 2 month program to find a market fit and an additional 6 month program for the actual incubation of the project.</p>
		                    </div>

		                </div>

		            </div>

		        </div>

		    </section>

















		        <div class="container">
		            <div class="row">
		               	<?php include_once("php/timeline.php"); ?>
		            </div>

		        </div>

		  <section class="bg-dark pt64 pb64">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="mb8">Where to find us</h2>
		                    <p class="lead mb40 mb-xs-24">If you want to get to know about our investment system send us an email at
		                    at <a href="mailto:investors@dymolab.com">investors@dymolab.com</a></p>
                        <p class="lead mb40 mb-xs-24">If you want get to know about our applications for entrepreneurs in Bogota, Colombia send us an email at
		                    at <a href="mailto:apply@dymolab.com">apply@dymolab.com</a></p>
                        <p class="lead mb40 mb-xs-24">If you want to get to know about how to expand your startup to Latin America send us an email at
		                    at <a href="mailto:scale-up@dymolab.com">scale-up@dymolab.com</a></p>
		                </div>
		            </div>

		        </div>

		    </section>


		<?php include_once($docpath . "/php/footer.php") ?>

		</div>

		<!-- Include head.js -->
        <script src="/js/head.load.min.js"></script>
        <!-- load all js asynchronously but in order -->
        <script>
        head.load(	"/js/jquery.min.js",
        			"/js/bootstrap.min.js",
        			"/js/flexslider.min.js",
        			"/js/parallax.js",
              "js/lightbox.min.js",
              "js/spectragram.min.js",
        			"/js/scripts.min.js"	);
        </script>





    </body>
</html>
