<?php get_header(); ?>
  
  <div class="bg-gray-100 py-8 mb-12">
    <?php $top_posts = get_posts(array( 
      'post_type' => 'post',
      'numberposts' => 5
    ));?>
    <div class="container">
      <div class="flex flex-wrap bg-white lg:border-b border-gray-200">
        <!-- 1 post -->
        <div class="w-full lg:w-2/3">
          <div class="border-b lg:border-b-0 lg:border-r border-gray-200 p-3 lg:p-6">
            <div class="relative h-[220px] lg:h-[380px]">
              <img src="<?php echo get_the_post_thumbnail_url($top_posts[0]->ID); ?>" alt="" class="w-full h-[220px] lg:h-[380px] object-cover rounded">
              <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-b from-transparent to-black/75 rounded z-1"></div>
              <div class="w-full absolute left-0 bottom-0 z-1">
                <div class="px-4 lg:px-8 py-4 lg:py-6">
                  <div class="text-lg lg:text-2xl text-white font-bold mb-2 lg:mb-4"><?php echo get_the_title($top_posts[0]->ID); ?></div>
                  <div class="text-white"><?php echo get_the_modified_time('F j, Y'); ?></div>
                </div>
              </div>
              <a href="<?php echo get_the_permalink($top_posts[0]->ID); ?>" class="w-full h-full absolute top-0 left-0 z-1"></a>
            </div>
          </div>
        </div>
        <!-- 2 post -->
        <div class="w-full lg:w-1/3">
          <div class="h-full flex flex-col justify-between border-b lg:border-b-0 border-gray-200 p-3 lg:p-6">
            <div class="mb-2 lg:mb-4">
              <img src="<?php echo get_the_post_thumbnail_url($top_posts[1]->ID); ?>" alt="" class="w-full h-auto lg:h-[190px] object-cover mb-2 lg:mb-4">
              <div class="text-lg lg:text-2xl font-bold"><a href="<?php echo get_the_permalink($top_posts[1]->ID); ?>"><?php echo get_the_title($top_posts[1]->ID); ?></a></div>
            </div>
            <div>
              <?php echo get_the_modified_time('F j, Y'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap bg-white">
        <!-- 3 post -->
        <div class="w-full lg:w-1/3">
          <div class="h-full flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-gray-200 p-3 lg:p-6">
            <div class="mb-2 lg:mb-4">
              <img src="<?php echo get_the_post_thumbnail_url($top_posts[2]->ID); ?>" alt="" class="w-full h-auto lg:h-[190px] object-cover mb-2 lg:mb-4">
              <div class="text-lg lg:text-2xl font-bold"><a href="<?php echo get_the_permalink($top_posts[2]->ID); ?>"><?php echo get_the_title($top_posts[2]->ID); ?></a></div>
            </div>
            <div>
              <?php echo get_the_modified_time('F j, Y'); ?>
            </div>
          </div>
        </div>
        <!-- 4 post -->
        <div class="w-full lg:w-1/3">
          <div class="h-full flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-gray-200 p-3 lg:p-6">
            <div class="mb-2 lg:mb-4">
              <img src="<?php echo get_the_post_thumbnail_url($top_posts[3]->ID); ?>" alt="" class="w-full h-auto lg:h-[190px] object-cover mb-2 lg:mb-4">
              <div class="text-lg lg:text-2xl font-bold"><a href="<?php echo get_the_permalink($top_posts[3]->ID); ?>"><?php echo get_the_title($top_posts[3]->ID); ?></a></div>
            </div>
            <div>
              <?php echo get_the_modified_time('F j, Y'); ?>
            </div>
          </div>
        </div>
        <!-- 5 post -->
        <div class="w-full lg:w-1/3">
          <div class="h-full flex flex-col justify-between p-3 lg:p-6">
            <div class="mb-2 lg:mb-4">
              <img src="<?php echo get_the_post_thumbnail_url($top_posts[4]->ID); ?>" alt="" class="w-full h-auto lg:h-[190px] object-cover mb-2 lg:mb-4">
              <div class="text-lg lg:text-2xl font-bold"><a href="<?php echo get_the_permalink($top_posts[4]->ID); ?>"><?php echo get_the_title($top_posts[4]->ID); ?></a></div>
            </div>
            <div>
              <?php echo get_the_modified_time('F j, Y'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="flex flex-wrap lg:-mx-2 mb-12">
      <div class="w-full lg:w-2/3 lg:px-2 mb-6 lg:mb-0">
        <h1 class="text-4xl font-black mb-6"><?php _e("What is the decomposition time of", "treba-wp"); ?>...?</h1>
        <div class="bg-gray-100 rounded-lg p-4">
          <div class="mb-8">
            <?php get_template_part("template-parts/search"); ?>
          </div>
          <?php 
            $posts = new WP_Query( array( 
              'post_type' => 'post', 
              'posts_per_page' => 20,
              'order' => 'DESC',
            ) );
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
          ?>
            <div class="flex flex-wrap flex-col mb-2">
              <?php get_template_part("template-parts/post-item"); ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-2">
        <?php get_template_part("template-parts/sidebar"); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>