<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="subpage-header" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
        <h1><?php echo get_the_title(); ?></h1>
    </header>
	<?php
        the_content();
	?>
</article><!-- #post-## -->
