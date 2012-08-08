<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage SPLOST
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>

<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <div id="pagewrapper">

    <div id="header">
      <p class="top-menu"><a href="http://127.0.0.1:8888/">HOME</a> / <a href="http://127.0.0.1:8888/about/">ABOUT THIS SITE</a> / <a href="http://127.0.0.1:8888/contact/">CONTACT</a> / <a href="http://127.0.0.1:8888/news/">NEWS</a> </p> 
      <div id="title_container">
      <h1 class="tright">MACON CHANGE</h1>
      <p class="subtitle">Track Macon's SPLOST Project Funding</p>
      </div>

    </div><!-- #header END -->

     <div id="bread_box">
      <div id="breadcrumbs">
        <?php if (is_page()) :  ?>
          <div class="left"><p><?php
          $parent_title = get_the_title($post->post_parent);
          echo $parent_title;?></p></div>
          <div class="right"><p><?php the_title(); ?></p></div>
        <?php endif; ?>
        
         <?php if (is_archive()) :  ?>
             <div class="left"><p>SPLOST</p></div>
             <div class="right"><p>Archive</p></div>
          <?php endif; ?>
          
          <?php if (is_404()) :  ?>
              <div class="left"><p>Uh oh.</p></div>
              <div class="right"><p>404</p></div>
            <?php endif; ?>
          
          <?php if (is_search()) :  ?>
              <div class="left"><p>SPLOST</p></div>
              <div class="right"><p>Search Results</p></div>
            <?php endif; ?>
        
        <?php if (is_single()) :  ?>
           <div class="left"><p><a href="<?php echo get_home_url(); ?>/news">News</a></p></div>
           <div class="right"><p><?php the_title(); ?></p></div>
        <?php endif; ?>
        
        <?php if (is_home()) :  ?>
             <div class="left"><p>SPLOST</p></div>
             <div class="right"><p>News</p></div>
        <?php endif; ?>
        
        
      </div><!-- #breadcrumbs END -->
     </div><!-- #bread_box END -->