<?php
/*
Template Name: About Template
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

<div id="primary" class="site-content">

<div class="hero"><img src="/wp-content/themes/diligent/images/Diligent3.jpg" /></div>

<div class="intro section">
      <h1 class="text-center"><span class="heavy">ABOUT</span> the game</h1>
      <p class="text-center">A rundown of who we are, what we do, and some guidelines to go by if you'd like to join on</p>
      <p class="text-center">If you have more questions, <a href="https://discord.gg/zwZp9fe">please visit our Discord server</a> so we can help</p>
</div>

<div class="section">
   <div class="about">
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