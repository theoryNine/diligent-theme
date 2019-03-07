<?php
/*
Template Name: Forum Template
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

<div class="hero"><img src="/wp-content/themes/diligent/images/diligentphasershero.jpg" /></div>

<div class="section user-toolbar">
      <a class="message-count" href="<?php echo do_shortcode('[bbpm-messages-link]') ?>">
            <!-- <img src="/wp-content/themes/diligent/images/mail-icon.svg" class="mail-icon" alt="Inbox" /> -->
            <div>Messages</div> 
            <div class="count-and-alert">
                  : <div class="unread-count"><?php echo do_shortcode('[bbpm-unread-count]') ?></div>
                  <div class="new-msg-alert">NEW!</div>
            </div>
      </a>
      <a href="<?php echo do_shortcode('[bbp_profile_link_shortcode]') ?>" class="profile-link">
            <!-- <img src="/wp-content/themes/diligent/images/user-icon.svg" class="profile-icon" alt="Profile" />  -->
            <div>Profile</div>
      </a>
      <a href="https://discord.gg/zwZp9fe" target="_blank" class="discord-link">
            <!-- <img src="/wp-content/themes/diligent/images/chat-icon.svg" class="profile-icon" alt="Profile" /> -->
            <div>Discord</div>
      </a>
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