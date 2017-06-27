<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div id="main">
<div class="row pageWrapper animated fadeIn">
<div class="small-12 columns">
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h2 class="entry-title"><?php the_title(); ?></h2>
      </header>
</div>
<div class="small-12 columns" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
</div>
