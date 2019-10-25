<ul class="et-social-icons">

<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" target="_blank" class="icon">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
		<?php if ( 'on' === et_get_option( 'divi_show_instagram_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-instagram">
		<a href="<?php echo esc_url( et_get_option( 'divi_instagram_url', '#' ) ); ?>" target="_blank" class="icon">
			<span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_skype_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-skype">
		<a href="<?php echo esc_url( et_get_option( 'divi_skype_url', '#' ) ); ?>" target="_blank" class="icon">
			<span><?php esc_html_e( 'skype', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
	<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" target="_blank" class="icon">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>


</ul>