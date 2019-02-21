<?php
/*
Template Name: Basic Bsck Template
*/
?>

<?php

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container">
      <?php
/*
Surrounding Classes for the site
These are different every theme and help with structure and layout
These could be SPANs or DIVs and with entirely different classes.
*/
?>

<div class="section user-toolbar"><p><a href="javascript:history.back()">Back</a></p></div>

<div id="primary" class="site-content">

<div class="hero"><img src="/wp-content/themes/diligent/images/map.jpg" /></div>

<div class="section">
   <div class="page">
    <div id="content" role="main">
        <?php
        /*
        Start the Loop
        */
        ?>

        <?php while ( have_posts() ) : the_post(); ?>


        <?php
        /*
        This is the start of the page and also the insertion of the post classes.
        Post classes are very handy to style your forums.
        */
        ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    /*
    This is the content wrapped in a div
    and class to better style the content
    */
    ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <!-- .entry-content -->
    <?php
    /*
    End of Page
    */
    ?>
    </article>
    <!-- #post -->
    <?php endwhile; // end of the loop. ?>
    </div>
    <!-- #content -->
    </div>
   </div>
</div>

</div>

</body>

<?php get_footer(); ?>