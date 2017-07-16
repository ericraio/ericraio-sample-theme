<?php
  get_header();

  while( have_posts() ) {
    the_post();
    ?>
      <!-- Page Title
        ============================================= -->
      <section id="page-title">
        <div class="container clearfix">
          <h1><?php the_title(); ?></h1>
          <?php
            if( function_exists( 'the_subtitle' ) ) {
              ?><span><?php the_subtitle(); ?></span><?php
            }
          ?>
        </div>
      </section>
    <?php
  }

  rewind_posts();
?>

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Post Content
                ============================================= -->
        <div class="postcontent nobottommargin clearfix">
          <?php
            while( have_posts() ) {
              the_post();
              ?>
              <div class="single-post nobottommargin">

              <!-- Single Post
                ============================================= -->
                <div class="entry clearfix">

                  <!-- Entry Image
                    ============================================= -->
                    <?php
                      if ( has_post_thumbnail() ) {
                        ?>
                        <div class="entry-image">
                          <a href="<?php the_permalink(); ?>" data-lightbox="image">
                            <?php the_post_thumbnail( 'full' ) ?>
                          </a>
                        </div>
                        <?php
                      }
                    ?>

                  <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content notopmargin">
                      <?php
                        the_content();
                        wp_link_pages(array(
                          'before' => '<p class="text-center">' . __( 'Pages:' ),
                          'after'  => '</p>'
                        ));
                      ?>

                      <div class="clear"></div>

                    </div>
                </div><!-- .entry end -->
              </div>
              <?php
            }
          ?>


        </div><!-- .postcontent end -->

        <?php get_sidebar() ?>
			</div>

		</div>

	</section><!-- #content end -->

<?php get_footer(); ?>
