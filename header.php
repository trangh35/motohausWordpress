<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="blog-masthead">
      <div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
    </div>

    <div class="container">
      <div class="frontpage content">
        <?php wp_nav_menu( array( 'theme_location'	=> 'left-body'	) ); ?>
      </div>
      <div class="blog-header">
        <p class="lead blog-description">
            <?php echo get_bloginfo( 'description' ); ?>
        </p>
      </div>