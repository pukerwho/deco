<?php get_header(); ?>
  <div class="container">
    <div class="mb-12">
      <h1 class="text-4xl font-black mb-6"><?php _e("What is the decomposition time of", "treba-wp"); ?>...?</h1>
      <div class="bg-gray-100 rounded-lg p-5">
        <?php get_template_part("template-parts/search"); ?>
      </div>
    </div>
    <div class="flex flex-wrap lg:-mx-4 mb-12">
      <?php 
        $post_two = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 2,
          'order' => 'DESC',
          'meta_query' => array(
            array(
              'key' => '_crb_post_top',
              'value' => 'yes',
              'compare' => '='
            ),
          ),
        ) );
        if ($post_two->have_posts()) : while ($post_two->have_posts()) : $post_two->the_post(); 
      ?>
        <?php $current_id = get_the_ID(); ?>
        <div class="w-full lg:w-1/2 lg:px-4 mb-6 lg:mb-0">
          <div class="bg-yellow-50 rounded-lg p-5">
            <div class="mb-4"><a href="<?php the_permalink(); ?>" class="text-2xl font-black hover:text-blue-500"><?php the_title(); ?></a></div>
            <div class="content mb-4"><?php echo get_post_meta($current_id, 'meta_post_short', true); ?></div>
            <div><a href="<?php the_permalink(); ?>" class="text-red-500"><?php _e("Read more", "treba-wp"); ?></a></div>
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="flex flex-wrap lg:-mx-6 mb-12">
      <div class="w-full lg:w-2/3 lg:px-6 mb-6 lg:mb-0">
        <?php 
          $posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 20,
            'order' => 'DESC',
          ) );
          if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
        ?>
          <?php get_template_part("template-parts/post-item"); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part("template-parts/sidebar"); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>