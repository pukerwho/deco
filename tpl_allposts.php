<?php
/*
Template Name: All Posts
*/
?>
<?php get_header(); ?>

<div class="container mt-8">
  <div class="flex flex-wrap mb-12">
    <div class="w-full mb-6 lg:mb-0">
      <div class="mb-6">
        <h1 class="text-4xl font-black"><?php _e("All posts", "treba-wp"); ?></h1>
      </div>
      <div class="bg-gray-100 rounded-lg p-5 mb-12">
        <?php get_template_part("template-parts/search"); ?>
      </div>
      <div class="flex flex-wrap lg:-mx-4 mb-12">
        <?php
          global $wp_query, $wp_rewrite;  
          $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
          $all_posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 40,
            'order' => 'DESC',
            'paged' => $current,
            // 'meta_query' => array(
            //   array(
            //     'key' => '_wp_page_template',
            //     'value' => 'default',
            //   ),
            // ),
          ) );
          if ($all_posts->have_posts()) : while ($all_posts->have_posts()) : $all_posts->the_post(); 
        ?>
          <div class="w-full lg:w-1/2 lg:px-4 mb-2">
            <?php $current_id = get_the_ID(); ?>
            <a href="<?php the_permalink(); ?>" class="capitalize text-lg hover:text-blue-500"><?php echo $post_name = get_post_meta($current_id, 'meta_post_name', true); ?></a>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="pagination text-center">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format'  => 'page/%#%',
            'total' => $all_posts->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>