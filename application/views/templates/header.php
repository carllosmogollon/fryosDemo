<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Agendapp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

            <!--li><a href="<?php echo base_url(); ?>">Inicio</a></li-->
            <li><a href="<?php echo base_url(); ?>">Inicio</a>
              <ul class="">

              </ul>
            </li>

						<li><a href="#">Contactos</a>
							<ul class="dropdown-nav">
								<li><a href="<?php echo base_url(); ?>home/navAddContacts">Nuevo</a></li>
								<li><a href="<?php echo base_url(); ?>home/navGetContacts">Listado</a></li>                
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">


				<!--  User Notifications / End -->

				<!-- User Menu -->


					<a href="https://www.facebook.com/FryosStudios/" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
						<i class="icon-brand-facebook-f"></i>
					</a>
					<a href="https://twitter.com/fryosstudios" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
						<i class="icon-brand-twitter"></i>
					</a>
					<a href="https://www.linkedin.com/company/fryos-studios/" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
						<i class="icon-brand-linkedin-in"></i>
					</a>


				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
