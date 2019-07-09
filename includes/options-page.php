<div class="wrap">
		<div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="80">
			<h1>Ajustes Jessica Cosmetics</h1>
		</div>
	   
		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options') ?>
			<p>
				<strong>Código de Google Analytics:</strong><br>
				<textarea type="text" name="google_code" style="width:50%;height:200px" /><?php echo get_option('google_code'); ?></textarea>
			</p>
			<p>
				<strong>Pixel Facebook:</strong><br>
				<textarea type="text" name="pixel_fb" style="width:50%;height:200px" /><?php echo get_option('pixel_fb'); ?></textarea>
			</p>
			<p>
				<strong>Dirección:</strong><br>
				<textarea type="text" name="contact" style="width:50%;height:200px" /><?php echo get_option('contact'); ?></textarea>
			</p>

			<p>
				<strong>Mínimo de compra Profesionales:</strong><br>
				<input type="number" name="pro_min" size="45" value="<?php echo get_option('pro_min'); ?>" />
			</p>
			
			<p>
				<strong>Mensaje cuando el usuario está conectado:</strong><br>
				<input type="text" name="logged-not" size="45" value="<?php echo get_option('logged-not'); ?>" />
			</p>
			
			<p>
				<strong>Email:</strong><br>
				<input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>" />
			</p>
			<p>
				<strong>Enlace de Términos y condiciones:</strong><br />
				<input type="text" name="terminos" size="45" value="<?php echo get_option('terminos'); ?>" />
			</p>
			<p>
				<strong>Enlace de Facebook:</strong><br />
				<input type="text" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" />
			</p>
			<p>
				<strong>Enlace de Instagram:</strong><br />
				<input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" />
			</p>
			<p>
				<strong>Enlace de Twitter:</strong><br />
				<input type="text" name="twitter" size="45" value="<?php echo get_option('twitter'); ?>" />
			</p>

			<p>
				<strong>Enlace de Youtube:</strong><br />
				<input type="text" name="youtube" size="45" value="<?php echo get_option('youtube'); ?>" />
			</p>
			<hr>
			
			<p><input type="submit" class="button button-primary" name="Submit" value="Guardar opciones" /></p>
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="google_code,contact,facebook,youtube,twitter,email,instagram,terminos,pixel_fb,logged-not,pro_min" />
		</form>
	</div>