<?php $current_id = get_the_ID(); ?>

<div class="border-b border-gray-200 last-of-type:border-transparent pb-8 mb-8">
  <div class="mb-4"><a href="<?php the_permalink(); ?>" class="text-2xl font-black hover:text-blue-500"><?php the_title(); ?></a></div>
  <div class="content mb-4"><?php echo get_post_meta($current_id, 'meta_post_short', true); ?></div>
  <div class="text-gray-600"><?php echo get_the_modified_time('F j, Y'); ?></div>
</div>