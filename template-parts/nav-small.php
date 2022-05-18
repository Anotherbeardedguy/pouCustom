<div class="flex flex-row items-top h-12">
    <div class="flex sm:justify-between   w-full space-x-4w py-2">
        <div class=" flex-initial  ">
     
        <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
         
        if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class=" w-16">';
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
						
        </div>
        <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 lg:bg-transparent lg:block flex flex-gow nav -ml-16 mt-6 flex-grow: 1',
						'menu_class'      => 'lg:flex lg:-mx-4 flex sm:justify-center space-x-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 text-darkgrey important',
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
        <div class="flex flex-initial col-auto mr-14 mt-2 place-items-top ">
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