</div>
<!-- end wrap -->

<footer class="bg-gray-100 py-8">
  <div class="container">
    <div class="flex flex-wrap flex-col-reverse lg:flex-row lg:-mx-6">
      <div class="w-full lg:w-1/2 lg:px-6">
        <div class="mb-6">
          <a href="<?php echo get_home_url(); ?>" class="text-2xl"><span class="w-[32px] w-min-[32px] h-[32px] h-min-[32px] inline-flex items-center justify-center bg-blue-500 text-white font-black rounded">D</span>ecompose <span class="w-[32px] w-min-[32px] h-[32px] h-min-[32px] inline-flex items-center justify-center bg-red-500 text-white font-black rounded">T</span>ime</a>
        </div>
        <div>
          <div class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vero odio porro neque, soluta tempora.</div>
          <div>© 2023</div>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-6 mb-6 lg:mb-0">
        <div class="text-xl font-black mb-4"><?php _e("About site", "treba-wp"); ?></div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => 'div',
            'menu_class' => 'flex top-menu'
          ]); ?>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-6 mb-6 lg:mb-0">
        <div class="text-xl font-black mb-4"><?php _e("Contact", "treba-wp"); ?></div>
        <div class="flex items-center">
          <div class="mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
          </div>
          <div><a href="mailto:hello@mail.com" class="text-lg">hello@mail.com</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>