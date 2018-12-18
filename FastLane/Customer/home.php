<!DOCTYPE html>
<html>
<head>
  <title>FastTouch</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="./../css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" type="text/css" href="./../css/slider.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>






<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="./../js/slider.js"></script>
</head>
<body>
  <?php include 'header.php';?>
  <div class="container-fluid mt-5">
    <div class="col-sm-1"></div>
    <div class="col-sm-3"><h4 class="mb-3">Recommended Ads</h4></div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner row w-100 mx-auto">
        <?php include './../PHP/customer_retrieve_all_posts.php';?>
          </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

	<div class="row text-center mb-4">
		<div class="col-md-12"><h2>OUR <strong class="text-primary">PORTFOLIO</strong></h2></div>
		<p class="col-md-6 offset-md-3">The user can select any type of categories like paints, spare parts of automobile, construction, household goods etc. or can search any type of consumer goods, once selected they can contact the company through messaging system provided by our website or make a phone call.</p>
	</div>

	<div class="row">
    <div class="carousel-inner row w-100 mx-auto">
      <?php include './../PHP/customer_retrieve_all_posts.php';?>
        </div>

	</div>

</div>




<div class="container text-center mb-5">
	<div class="row">
		<div class="col-md-12">
			<h2>CORE <strong class="text-primary">FEATURES</strong></h2>
			<p>To make a user-friendly website where a customer can buy any consumer goods, furniture, electronic devices and search for any service which he/she wants.</p>
		</div>
	</div>
</div>

<div class="container-fluid choose">
	<div class="container pt-4 pb-4">
		<div class="row text-center mb-4">
			<div class="col-md-12">
				<h2 class="text-primary">OUR SERVICES</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card upper-card">
					<div class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
					<div class="card-body">
					<h3>Meet professionals</h3>
					<p>Firstly, this website will allow professionals to post their ads on our website and that advertisement will be shown to every user which is registered on our website. </p>
				</div>
				</div>

			</div>

			<div class="col-md-4">
				<div class="card upper-card">
					<div class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
					<div class="card-body">
					<h3>Easy sign-up</h3>
					<p>	A customer or professionals can login and sign-up into the website and can access to various ads posted by companies, professionals and even regular users. </p>
				</div>
				</div>

			</div>

			<div class="col-md-4">
				<div class="card upper-card">
					<div class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
					<div class="card-body">
					<h3>Exciting Plans</h3>
					<p> Once signed-up with the company login, the professional user i.e. company user must buy membership plans to post their ads </p>
				</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row text-center">
		<div class="col-md-12">
			<h2>WHY <strong class="text-primary">CHOOSE</strong> US</h2>
		</div>
	</div>

	<div class="row text-center">
		<div class="col-md-8 offset-md-2">

		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-6">
			<img src="./../img/logo.png" alt="image" class="img-fluid m-auto">
		</div>
		<div class="col-md-6">
			<p>Our website gives an oppurtunity for customers to get things at one place, whatever they might be looking for, FastTouch is one solution. </p>
			<div class="media">
				<i class="fa fa-eye" aria-hidden="true"></i>
				<div class="media-body">
					<h5 class="mt-0">View postings near you</h5>
					We make it easy for you to search postings near you.

				</div>
			</div>

			<div class="media">
				<i class="fa fa-diamond" aria-hidden="true"></i>
				<div class="media-body">
					<h5 class="mt-0">Packed Full Of Features</h5>
					Our Features may vary depending upon the plans you choose.

				</div>
			</div>


			<div class="media">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div class="media-body">
					<h5 class="mt-0">24/7 Support</h5>
					Our team is available 24x7 to help you.

				</div>
			</div>
			<!-- <div class="my-btn">
			<button class="btn btn-lg btn-outline-success">LEARN MORE &gt;</button>
		    </div> -->
		</div>
	</div>

</div>





<div class="container mt-4">
	<div class="row">
		<div class="col-md-6">
			<h2>WHAT WE <strong class="text-primary">OFFER </strong></h2>
			<hr>
			<p>FastTouch users are connected with the professionals that they are looking to hire also with the companies and get great deals buying their products.</p>

			<p><i class="fa fa-pencil-square-o"></i> 27 Predifined Home </p>
			<p><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Giving access to products with great discounts</p>
			<p><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Postings at very Cheaper Rates</p>
            <p><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Unlimited posts for premium users </p>
            <p>Don't Miss the oppurtunity register now.</p>
            <!-- <button class="btn btn-lg btn-primary"><i class="fa fa-users" aria-hidden="true"></i>LEARN MORE</button> -->
		</div>


							<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
							  <div class="card-body">

							  </div>
							</div>
						  </div>


					</div>
				</div>

				<div id="messages1" class="tab-pane fade">
					<h2>Why we best?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit possimus fuga deleniti blanditiis, illum voluptatum officia sunt, aspernatur totam odio quasi adipisci ducimus maiores pariatur qui, consectetur non vitae a!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit possimus fuga deleniti blanditiis, illum voluptatum officia sunt, aspernatur totam odio quasi adipisci ducimus maiores pariatur qui, consectetur non vitae a!</p>

				</div>

			</div>
		</div>
	</div>
</div>







<div class="container-fluid footer-copywrite">
	<div class="col-md-12 text-center lead">Copywrite @ 2018-fasttouch.com</div>
</div>
















</body>
</html>
