<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Actualizar</a></li>
		</ul>

		<div class="popup-tabs-container">
			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
						<!-- Welcome Text -->
						<div class="welcome-text">
							<h3>Actualizar datos de contacto</h3>
						</div>
						<!-- Form -->
						<form method="post" id="send-update-contact" action="<?php echo base_url('home/updateContact'); ?>">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-account-circle"></i>
								<input type="text" class="input-text with-border" name="idcontact-register" readonly id="idcontact-register" required/>
							</div>

							<div class="input-with-icon-left">
								<i class="icon-material-outline-account-circle"></i>
								<input type="text" class="input-text with-border" placeholder="Nombre Completo" name="fullname-register" id="fullname-register" required/>
							</div>

							<div class="input-with-icon-left">
								<i class="icon-material-outline-business-center"></i>
								<input type="text" class="input-text with-border" placeholder="Num Celular" name="cel-register" id="movil-repeat-register" required/>
							</div>

							<div class="input-with-icon-left" title="Al menos 8 caracteres" data-tippy-placement="bottom">
								<i class="icon-material-outline-business-center"></i>
								<input type="text" class="input-text with-border" placeholder="Num Telefono" name="tel-register" id="telefono-register" />
							</div>

							<div class="input-with-icon-left">
								<i class="icon-material-baseline-mail-outline"></i>
								<input type="text" class="input-text with-border" placeholder="Correo electrónico" name="emailaddress-register" id="emailaddress-register" />
							</div>

						</form>
						<!-- Button -->
						<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-update-contact">Actualizar <i class="icon-material-outline-arrow-right-alt"></i></button>
						<br>
						<h2>Actualizar foto</h2>
						<?php echo form_open_multipart('home/do_upload');?>
						<input type="hidden" name="idCont" id="hiddenIdContact" value="">
							<input type='file' name='userfile' />
							<input type='submit' name='submit' value='Guardar' />
						<?php echo "</form>"?>

					</div>
				</div>
			</div>
	</div>




<div class="container">
	<div class="row">
		<div class="col-xl-1 col-lg-4">

		</div>
		<div class="col-xl-11 col-lg-8 content-left-offset">

			<div class="notify-box margin-top-15">
				<div class="switch-container">
				</div>

				<div>
					<span><b>Listado de Contactos</b></span>
				</div>
			</div>

			<div class="freelancers-container freelancers-list-layout compact-list margin-top-35">
				<!-- Freelancers List Container -->

				<?php foreach ($contacts as $contact) { ?>

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">

								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="#small-dialog"
									onClick="chooseContact(<?php echo $contact->idContact ?>,'<?php echo $contact->fullName ?>',
									'<?php echo $contact->cel ?>', '<?php echo $contact->tel ?>', '<?php echo $contact->emailaddress ?>')" 
										class="popup-with-zoom-anim ripple-effect">
										<img src="<?php echo base_url('uploads/pic'.$contact->idContact.'.jpg'); ?>" alt="">
									</a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><?php echo $contact->fullName; ?></h4>
									<span><?php echo $contact->idContact; ?></span><br>
									<span><?php echo $contact->emailaddress; ?></span><br>
									<span><b><?php echo $contact->typeContact; ?></b></span>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Celular <strong><i class="icon-material-outline-location-on"></i> <?php echo $contact->cel; ?></strong></li>
									<li>Fijo <strong><?php echo $contact->tel; ?></strong></li>

								</ul>
								<ul>

									<li>
										<a href="#small-dialog"
										onClick="chooseContact(<?php echo $contact->idContact ?>,'<?php echo $contact->fullName ?>',
										'<?php echo $contact->cel ?>', '<?php echo $contact->tel ?>', '<?php echo $contact->emailaddress ?>')"
										class="button button-sliding-icon popup-with-zoom-anim button ripple-effect">
											Editar
											<i class="icon-material-outline-arrow-right-alt"></i>
										</a>
									</li>
									<!--li><a href="#small-dialog-delete" class="button button-sliding-icon popup-with-zoom-anim button dark ripple-effect">Eliminar <i class="icon-material-outline-arrow-right-alt"></i></a></li-->
									<li><a href="<?php echo base_url('home/deleteContact/'.$contact->idContact);?>" class="button button-sliding-icon dark ripple-effect">Eliminar <i class="icon-material-outline-arrow-right-alt"></i></a></li>
								</ul>
							</div>
						</div>

					</div>

					<!-- Freelancer / End -->

			 <?php } ?>
			</div>
			<!-- Freelancers Container / End -->

		</div>
	</div>
</div>

<script type="text/javascript">

	//load contact parameters to update one
	function chooseContact(idContact, fullName, cel, tel, email)
	{
		document.getElementById("idcontact-register").value = idContact;
		document.getElementById("fullname-register").value = fullName;
		document.getElementById("movil-repeat-register").value = cel;
		document.getElementById("telefono-register").value = tel;
		document.getElementById("emailaddress-register").value = email;

		document.getElementById("hiddenIdContact").value = idContact;

	}



</script>
