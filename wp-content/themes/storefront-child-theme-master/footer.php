<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
<?php if(is_front_page()) { ?>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="instagram-feed">
	<div class="container">
		<div class="elfsight-app-e2cb8aa1-a21b-478a-8040-d6df6449668b">
		</div>
	</div>
</div>
<?php } ?>

</a>
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<div class="container">
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' );
<<<<<<< HEAD
=======
			
>>>>>>> 98a99b80cbfdd3b0ea89b7f5850246fd6f6744cb
			?>
				Footer
			</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
