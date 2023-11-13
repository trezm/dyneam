<?php
/**
 * Template Name: Blog Page
 *
 * This template has width, margin and padding containers removed for use with page builder plugins.
 *
 * @package Genesis Block Theme
 */

get_header(); ?>

<div class="header_background"></div>
    
<div class="section_normal" id="blog">
  <div class="section_title">Media and Press Releases</div>
  <div class="blog">
    <?php $args = array( 'numberposts' => 5, 'post_type' => 'blog-post', 'order'=>
    'DESC', 'orderby' => 'post_date' ); $blog_posts = get_posts( $args ); foreach ($blog_posts
    as $blog_post) { ?>
    <div class="blog_post">
      <?php if (get_field('external_url', $blog_post->ID)) { ?>
      <a href="<?php get_field('external_url', $blog_post->ID) ?>">
        <h2>
          <?php echo $blog_post->post_title; ?>
        </h2>
      </a>
      <?php } else { ?>
      <h2>
        <?php echo $blog_post->post_title; ?>
      </h2>
      <?php } ?>
      <div>
        <?php echo $blog_post->post_content; ?>
      </div>
      <div>
        Posted on <?php echo the_time( 'l, F jS, Y', $blog_post->post_date); ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<?php get_footer(); ?>

