<div class="wrap">
		<div>
			<h1>Ajustes Abogadísimo</h1>
		</div>
	   
		<form method="post" action="options.php">
			<?php settings_fields( 'aboga-group' ); ?>
    		<?php do_settings_sections( 'aboga-group' ); ?>
			<?php wp_nonce_field('update-options') ?>
			
			<p>
				<strong>Enlace de Instagram:</strong><br />
				<input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" />
			</p>
			<p>
				<strong>Enlace de Twitter:</strong><br />
				<input type="text" name="twitter" size="45" value="<?php echo get_option('twitter'); ?>" />
			</p>

			
			<hr>
			
			<p><input type="submit" class="button button-primary" name="Submit" value="Guardar opciones" /></p>
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="twitter,instagram" />
		</form>
	</div>