<?php if (!is_home()): ?>
  <div class="bg-gray-100 rounded-lg p-5 mb-12">
    <?php get_template_part("template-parts/search"); ?>
  </div>
<?php endif; ?>

<div class="border border-gray-200 rounded-lg mb-6 js-quiz-sidebar">
  <div class="bg-gray-100 text-xl text-center font-medium py-4 px-2">
    Quiz
  </div>
  <div class="py-4">
    <div class="text-center text-lg text-gray-700 px-4 mb-4">How long do you think it takes for a banana peel to decompose?</div>
    <div class="px-4 mb-4">
      <div class="bg-gray-100 rounded text-lg text-center cursor-pointer px-2 py-3 js-quiz-item" data-q-banana="1" >
        2 month
      </div>
    </div>
    <div class="px-4 mb-4">
      <div class="bg-gray-100 rounded text-lg text-center cursor-pointer px-2 py-3 js-quiz-item" data-q-banana="2">
        2 years
      </div>
    </div>
    <div class="px-4 mb-4">
      <div class="bg-gray-100 rounded text-lg text-center cursor-pointer px-2 py-3 js-quiz-item" data-q-banana="3">
        20 years
      </div>
    </div>
    <div class="px-4">
      <div class="bg-gray-100 rounded text-lg text-center cursor-pointer px-2 py-3 js-quiz-item" data-q-banana="4">
        Does not decompose
      </div>
    </div>
  </div>
</div>

<div class="border border-gray-200 rounded-lg mb-6">
  <div class="bg-gray-100 text-xl text-center font-medium py-4 px-2">
    ✅ <?php _e("10 most ecologically clean countries in the world", "treba-wp"); ?> 🌎
  </div>
  <div class="py-4">
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Switzerland</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Sweden</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Finland</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Norway</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Germany</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Austria</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Iceland</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Denmark</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">New Zealand</div>
    </div>
    <div class="px-4 mb-2 last-of-type:mb-0">
      <div class="text-lg">Canada</div>
    </div>
  </div>
</div>

<div class="border border-gray-200 rounded-lg mb-6">
  <div class="bg-gray-100 text-xl text-center font-medium py-4 px-2">
    🔝 <?php _e("Popular posts", "treba-wp"); ?>
  </div>
  <div class="py-4">
    <?php 
      $posts = new WP_Query( array( 
        'post_type' => 'post', 
        'posts_per_page' => 10,
        'order' => 'DESC',
      ) );
      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
    ?>
      <div class="px-4 mb-2 last-of-type:mb-0">
        <div class="text-lg"><a href="<?php the_permalink(); ?>" class="hover:text-blue-500"><?php the_title(); ?></a></div>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php if (!is_single()): ?>
<div class="border border-gray-200 rounded-lg mb-6">
  <div class="bg-gray-100 text-xl text-center font-medium py-4 px-2">
    <?php _e("What types of secondary raw materials do we distinguish?", "treba-wp"); ?>
  </div>
  <div class="py-4">
    <div class="text-center text-lg text-gray-700 px-4 mb-4">There are several types of secondary raw materials, including:</div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Metals</div>
      <div class="opacity-75">These include metals such as aluminum, steel, copper, and lead, which are recovered from scrap and waste materials like old vehicles, appliances, and electronic devices.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Plastics</div>
      <div class="opacity-75">Plastics from used containers, packaging, and other plastic waste can be recycled and converted into raw materials for manufacturing new plastic products.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Paper</div>
      <div class="opacity-75">Paper and cardboard products, like newspapers, magazines, and used cardboard boxes, can be recycled to produce new paper and paper-based products.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Glass</div>
      <div class="opacity-75">Glass bottles and containers can be recycled and processed into raw materials for making new glass products.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Textiles</div>
      <div class="opacity-75">Textiles and clothing can be recycled to create secondary raw materials for making new fabric and clothing items.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recovered Energy</div>
      <div class="opacity-75">Waste-to-energy processes can extract energy from waste materials, such as incineration of non-recyclable waste, to generate electricity or heat.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Electronic Waste (E-waste)</div>
      <div class="opacity-75">Electronic waste, including old computers, smartphones, and other electronic devices, can be processed to extract valuable metals and components for reuse.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Reclaimed Wood</div>
      <div class="opacity-75">Wood from demolished buildings or used wooden products can be salvaged and reused as secondary raw materials for construction and other applications.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Regenerated Fibers</div>
      <div class="opacity-75">Some fibers, like polyester and nylon, can be chemically processed from post-consumer waste, such as plastic bottles or discarded textiles.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4 mb-4">
      <div class="text-lg mb-2">🟩 Recycled Rubber</div>
      <div class="opacity-75">Rubber from discarded tires and other rubber products can be recycled and used in various applications, including in manufacturing new tires.</div>
    </div>
    <div class="px-4 opacity-75">
      These secondary raw materials play a vital role in promoting sustainability and reducing the environmental impact of industrial processes by reducing the need for virgin raw materials and minimizing waste generation.
    </div>
  </div>
</div>

<div class="border border-gray-200 rounded-lg mb-6">
  <div class="bg-gray-600 rounded-t-lg text-xl text-center font-medium text-gray-100 py-4 px-2">
    <?php _e("TOP 5 products commonly made from recycled materials", "treba-wp"); ?>
  </div>
  <div class="py-4">
    <div class="border-b border-gray-300 pb-4 px-4">
      <div class="text-lg mb-2">♻️ Recycled Paper Products</div>
      <div class="opacity-75">Various paper products, such as notebooks, tissue paper, cardboard boxes, and printing paper, are often made from recycled paper fibers. Recycling paper helps conserve trees and reduces the demand for fresh wood pulp.</div>
    </div>
    <div class="bg-gray-50 border-b border-gray-300 pb-4 py-4 px-4 mb-4">
      <div class="text-lg mb-2">♻️ Recycled Plastic Products</div>
      <div class="opacity-75">Plastic bottles, containers, bags, and other plastic items can be recycled and transformed into new products like recycled plastic bottles, packaging materials, outdoor furniture, and even clothing.</div>
    </div>
    <div class="border-b border-gray-300 pb-4 px-4">
      <div class="text-lg mb-2">♻️ Recycled Aluminum Products</div>
      <div class="opacity-75">Recycled aluminum is used to manufacture a wide range of products, including aluminum cans, foils, kitchen utensils, and parts for automobiles and bicycles.</div>
    </div>
    <div class="bg-gray-50 border-b border-gray-300 pb-4 py-4 px-4 mb-4">
      <div class="text-lg mb-2">♻️ Recycled Glass Products</div>
      <div class="opacity-75">Glass bottles and containers can be recycled to create new glass products, such as new bottles, jars, glassware, and even countertops and decorative items.</div>
    </div>
    <div class="px-4">
      <div class="text-lg mb-2">♻️ Recycled Tire Products</div>
      <div class="opacity-75">Used rubber tires are recycled and repurposed into various products, such as rubberized playground surfaces, athletic tracks, automotive parts, and even rubberized asphalt for road construction.</div>
    </div>
  </div>
</div>
<?php endif; ?>