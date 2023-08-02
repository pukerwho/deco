<?php get_header(); ?>

<div class="container">
  <div class="w-full lg:w-2/3 border border-gray-200 rounded-lg mx-auto mb-12">
    <div class="bg-gray-100 p-8">
      <h1 class="text-4xl font-black text-center"><?php the_title(); ?></h1>
    </div>
    <div class="content px-6 py-8">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>