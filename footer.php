<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rjulab
 */

?>

	</div><!-- #content -->
<div class="container">
	<footer id="colophon" class="site-footer pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-6 col-md">
              <h5 style="color:#1dcaff";>RJUlab.com</h5>
            <small class="d-block mb-3 text-muted">&copy; 2018</small>
              <ul class="list-unstyled text-small">
                                  <li class="nav-item"><a class="btn btn-sm btn-link" href="https://rjulab.com">Homepage</a></li>
                  <li>
                  <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rjulab' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'rjulab' ), 'WordPress' );
				?>
			</a>
                  </li>
                              </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Features</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
                
            </ul>
          </div>
        </div>
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
