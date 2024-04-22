<?php $currentId = get_the_ID(); ?>

<div class="w-full bg-white rounded-lg px-4 py-2 lg:py-4">
  <div class="flex flex-wrap">
    <?php $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
    <?php if ($medium_thumb): ?>
      <div class="w-full lg:w-1/4 pr-0 lg:pr-4 mb-4 lg:mb-0">
        <img class="w-full h-[125px] min-h-[125px] object-cover rounded" alt="<?php the_title(); ?>" src="<?php echo $medium_thumb; ?>" loading="lazy">
      </div>
    <?php endif; ?>

    <div class="<?php echo ($medium_thumb) ? "w-full lg:w-3/4" : "w-full"; ?>">
      <div class="text-lg lg:text-2xl text-gray-800 font-bold">
        <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
      </div>
      <?php $content_text = wp_strip_all_tags( get_the_content() ); if ($content_text): ?>
        <div class="text-sm text-gray-800 mt-2">
          <?php echo mb_strimwidth($content_text, 0, 200, '...'); ?>
        </div>
      <?php endif; unset($content_text); ?>
      <div class="text-sm text-gray-700 italic mt-2 lg:mt-4"><?php echo get_the_modified_time('F j, Y'); ?></div>
    </div>
  </div>
</div>