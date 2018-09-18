<?php
/*
Template Name: Enlist Template
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

<div class="hero"><img src="/wp-content/themes/diligent/images/academy.png" /></div>

<div class="intro section">
      <h1 class="text-center"><span class="heavy">JOIN</span> the Diligent</h1>
      <p>To join the <em>Diligent</em> please fill out the following form. To identify open positions, take a look at the <a href="/manifest">crew manifest</a>.</p>
      <p>Not sure what this is? Check out our <a href="/about">FAQ page</a> to find out more.</p>
      <p>Check out the <a href="/manifest/elgor-rae">CO</a> and <a href="/manifest/marcus-bancroft">XO</a> profiles to see what kind of detail we're looking for</p>
      <p>Once you've submitted an application you should hear back within 24-48 hours.</p>
      <p>Upon being accepted you will receive a welcome email and login details for the site and forums.</p>
      <p>Building your character and have questions? Send me an email at <a href="mailto:elgor.rae@gmail.com">elgor.rae@gmail.com</a> and I'll be happy to help.</p>
</div>

<div class="section">
   <div class="enlist">
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