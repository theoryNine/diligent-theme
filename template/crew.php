<?php
/*
Template Name: Crew Bio Template
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

<div class="bio">
<div class="section">
   <div class="pic text-center">
      <h1 class="text-center"><span style="text-transform:lowercase;"><?php the_field('rank'); ?></span> <span class="heavy" style="text-transform:uppercase;"><?php the_field('character_name'); ?></span></h1>
      <?php 

      $image = get_field('image');

      if( !empty($image) ): ?>

         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
   </div>
   <p><strong><span class="key">Character Name:</span></strong> <span class="key"><?php the_field('character_name'); ?></span></p>
   <p><strong><span class="key">Position:</span></strong> <span class="key"><?php the_field('position'); ?></span></p>
   <p><strong><span class="key">Species:</span></strong> <span class="key"><?php the_field('species'); ?></span></p>
   <p><strong><span class="key">Gender:</span></strong> <span class="key"><?php the_field('gender'); ?></span></p>
   <p><strong><span class="key">Birthdate:</span></strong> <span class="key"><?php the_field('birthdate'); ?></span></p>
   <p><strong><span class="key">Physical Description:</span></strong></p>
   <p><span class="key"><?php the_field('physical_description'); ?></span></p><br>
   <p><strong><span class="key">History:</span></strong></p>
   <p><span class="key"><?php the_field('history'); ?></span></p><br>
      <p><strong><span class="key">Service Record:</span></strong></p>
   <p><span class="key"><?php the_field('service_record'); ?></span></p>




</div>
</div>

<div id="primary" class="site-content">
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

   <!-- #primary -->


   <?php
   /*
   This is code to display the sidebar and the footer.
    
   Remove the sidebar code to get full-width forums.
    
   This would also need CSS to make it actually full width.
   */
   ?>

</div>
</body>

<?php get_footer(); ?>