<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Crear Contacto</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Inicio</a></li>
						<li>Crear Contacto</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Crear Contacto!</h3>
				</div>



				<!-- Form -->
				<form method="post" id="register-contact-form" action="<?php echo base_url('home/saveContact'); ?>">

					<!-- Account Type -->
					<div class="account-type">
						<div>
							<input type="radio" name="account-type-radio" id="freelancer-radio" value="cliente" class="account-type-radio" checked/>
							<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Cliente</label>
						</div>

						<div>
							<input type="radio" name="account-type-radio" id="employer-radio" value="proveedor" class="account-type-radio"/>
							<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Proveedor</label>
						</div>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="idcontact-register" id="idcontact-register" placeholder="Identificación contacto" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="fullname-register" id="fullname-register" placeholder="Nombre completo" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-business-center"></i>
						<input type="text" class="input-text with-border" name="cel-register" id="movil-repeat-register" placeholder="N Celular" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-business-center"></i>
						<input type="text" class="input-text with-border" name="tel-register" id="telefono-register" placeholder="N Fijo" />
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" />
					</div>

				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="register-contact-form">Guardar <i class="icon-material-outline-arrow-right-alt"></i></button>

				<!-- Social Login -->
				<div class="social-login-separator"><span></span></div>

			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
