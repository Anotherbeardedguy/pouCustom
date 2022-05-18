<div class="flex flex-row items-top">
    <div class="flex sm:justify-between   w-full space-x-4w py-2">
        <div class=" flex-initial ">
     
        <?php the_custom_logo(); ?>
						
        </div>
        <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 lg:bg-transparent lg:block flex flex-gow nav -ml-16 mt-6 flex-grow: 1',
						'menu_class'      => 'lg:flex lg:-mx-4 flex sm:justify-center space-x-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
        <!-- <div class="">
        <form action="/search/results">
            <input class="search" type="search" name="q" placeholder="">
            <button type="submit">

            </button>
        </form>
    </div> -->
        <div class="flex flex-initial col-auto mr-14 mt-8 place-items-top ">
            <div class="w-36">
                <div class="border-none relative flex items-stretch mb-4">

                    <input type="search" class=" search bg-transparent " placeholder="Etsi" aria-label="Search"
                        aria-describedby="">
                    <svg class="flex w-4 h-4 mt-3  text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>