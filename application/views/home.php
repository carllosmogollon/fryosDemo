<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!doctype html>

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="<?php echo base_url(); ?>assets/images/home-background.jpg">
	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Bienvenido a tu agenda</strong>
						<br>
						<span>Administra tus <strong class="color">Contactos Empresariales</strong> y optimiza tus flujos corporativos.</span>
					</h3>
				</div>
			</div>
		</div>


		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter"><?php echo $totalContacts ?></strong>
						<span>Número de Contactos</span>
					</li>
					<li>
						<button class="button ripple-effect" onclick="window.location.href='<?php echo base_url(); ?>home/navGetContacts'">Ver Contactos</button>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
