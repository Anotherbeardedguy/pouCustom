<header>
<?php if ( is_front_page() ) { ?>
<div class="hero-container flex flex-col container flex-nowrap  h-[640px] z-0 bg-cover"
      style="background-image:url('http://localhost:1337/uploads/pexels_ioana_motoc_7521473_e71c8b59b1.jpg?updated_at=2022-05-08T13:12:16.623Z')">
      <?php
      get_template_part( 'template-parts/nav');
      ?>
      <div class="flex flex-row">
          <div class="flex flex-col  w-full justify-center items-center ">
              <div class="h-36 mt-1 ">
                  <h1>Järjestetään jotain johonkin</h1>
              </div>
              <div class="">
                  <button class="callToAction-btn" type="button">Ota Yhteyttä</button>

              </div>
          </div>
      </div>

  </div>
  <?php } ?>
  <?php if ( !is_front_page() ) {
      get_template_part( 'template-parts/nav-small');
    } ?>
  </header>