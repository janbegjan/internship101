<?php
$name = $_POST["name"];
$email = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
		/>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="/assets/fonts/css/all.min.css">

    <!-- Roboto Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/queries.css" />

    <title>Pantsuit Professionals</title>
  </head>
  <body>
    <div class="container-fluid">
      <section class="navigation__main">
        <!-- Section: Navigation -->
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light main_menu">
            <div class="navbar-logo">
              <img class="img-fluid" src="/assets/imgs/logo.png" alt="logo" /><a
                href="index.html"
              ></a>
            </div>
            <a class="navbar-brand  mr-5" href="#">Pantsuit Professionals</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Lifestyle</a>
                </li>
                <li class="nav-item active dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Events <span class="sr-only">(current)</span>
                  </a>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="events.html">Browse Events</a>
                    <a class="dropdown-item" href="#">Post An Event</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Campus</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Join</a></li>
              </ul>
						</div>
						<ul class="nav navbar-nav social-icons ml-2">
								Follow:
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fab fa-facebook-messenger"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
								</li>
							</ul>
          </nav>
        </div>
      </section>
      <section class="event__single hero">
        <!-- Section: Hero -->
        <div class="row pt-5 pb-5">
          <div class="hero__bc2 ml-auto mr-auto text__white">
						<h1 class="hero__event-registration">Registration</h1>
						<div class="hero__event-details mt-3">
							<h2 class="hero__event-title ml-auto mr-auto h2">Event Name</h2>
						</div>
          </div>
        </div>
      </section>
      <section class="event__reg-confirmed mt-2">
        <!-- Section: Event Registration -->
        <div class="event">
          <div class="row pt-5 pb-5">
            <div class="col-md-7 offset-md-1 form-border">
							<p class="event__reg-thankyou h4">Thank you! You're going to XXXXXX(Event name)!</p>
							<p class="event__reg-ticketMailed mt-5 h4">Your ticket has ben sent to <br><?php echo $email; ?></p>
							<p class="event__reg-ticketShare mt-5 h4">Share with your friend</p>
							<div class="event__reg-confirmed-share">
									<nav class="navbar navbar-expand-lg">
											<ul class="nav navbar-nav c2a__social ml-2">
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fab fa-facebook-messenger"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
												</li>
											</ul>
										</nav>
							</div>	
						</div>
            <div class="col-md-3">
							<div class="form-border">
								<h4 class="new__subscriber-Name">Hi, <span><?php echo $name; ?></span></h4>
								<h4 class="event__organizer mt-5">Organizer</h4>
								<p class="event__organizer-name">XXXXXXXXXXXXXXXXX</p>

							</div>
						</div>
          </div>
        </div>
      </section>
      <footer class="footer mt-5 mb-5">
        <div class="row">
          <div class="col-md-4 offset-md-1 navbar-light">
            <ul class="navbar-nav footer__menu">
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
              <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-md-6 offset-md-1">
						<div class="newsletter">
							<h3><label for="newsletter101">Pantsuit Professionals Monthly Diary</label></h3>
							<div class="newsletter__form p-3">
								<form class="form-inline my-2 my-lg-0">
									<input id="newsletter101" class="form-control mr-sm-2 w-75" type="email" placeholder="yourname@email.com" aria-label="Email" required>
									<button class="btn btn-outline-danger my-3 my-sm-0 ml-3" type="submit">Go!</button>
								</form>
							</div>
						</div>
					</div>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
		></script>
		<script src="/assets/fonts/js/all.min.js"></script>
  </body>
</html>
