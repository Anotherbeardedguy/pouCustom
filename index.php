<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <?php
      }
    }
    ?>
</body>
</html>