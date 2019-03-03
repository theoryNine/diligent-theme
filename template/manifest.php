<?php
/*
Template Name: Manifest Template
*/
?>

<?php

get_header(); 

?>

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
<div class="hero"><img src="/wp-content/themes/diligent/images/bridge.jpg" /></div>

<div class="intro section">
      <h1 class="text-center">crew <span class="heavy">MANIFEST</span></h1>
      <p class="text-center">The writers and dreamers of the <em>Diligent</em>.</p>
      <p class="text-center subnav-section"><a href="#command">Command</a> - <a href="#engineering">Engineering</a> - <a href="#conn">Flight Control</a> - <a href="#intelligence">Intelligence</a> 
      - <a href="#medical">Medical</a> - <a href="#operations">Operations</a> - <a href="#science">Science</a> - <a href="#tactical">Tactical/Security</a> - <a href="#civilians">Civilians</a></p>
      <p class="text-center subnav-section">
         <a href="#" class="openButton openToggle">hide open positions</a><a href="#" class="hidden openButton openToggle">show open positions</a> - 
         <a href="#" class="npc-open-btn npc-toggle">hide non-player characters</a><a href="#" class="hidden npc-open-btn npc-toggle">show non-player characters</a>
      </p>
</div>

<div class="section">
   <div class="manifest">
      <div id="command"></div>
      <div class="department section">
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Command_Department" target="_blank">COMMAND</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o5.png" /></div><div class="mani-field position"><p>Commanding Officer</p></div><div class="mani-field character"><p><a href="/manifest/elgor-rae/">Elgor Rae</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o4.png" /></div><div class="mani-field position"><p>Executive Officer</p></div><div class="mani-field character"><p><a href="/manifest/marcus-bancroft/">Marcus Bancroft</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief of the Boat</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div id="engineering"></div>
      <div class="department section open-npc">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Engineering_Department" target="_blank">ENGINEERING</a></h3>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Transporter Chief</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row npc">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/y-e8.png" /></div><div class="mani-field position"><p>Engineer's Mate</p><p class="secondary">Acting Chief Engineer</p></div><div class="mani-field character"><p><a href="/manifest/ceji-belgu-npc">Ceji Belgu <em>(NPC)</em></a></p></div>
         </div>
      </div>

      <div id="conn"></div>
      <div class="department section">
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Flight_Control_Department" target="_blank">FLIGHT CONTROL</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o1.png" /></div><div class="mani-field position"><p>Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/manifest/aerith-terovn/">Aerith Terovn</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
            </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div id="intelligence"></div>
      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Intelligence_Department" target="_blank">INTELLIGENCE</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o3.png" /></div><div class="mani-field position"><p>Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/manifest/john-simmons">John Simmons</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Intel Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Collection's Manager</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div id="medical"></div>
      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Medical_Department" target="_blank">MEDICAL</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-o3.png" /></div><div class="mani-field position"><p>Rosheen Hughes</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-o3.png" /></div><div class="mani-field position"><p>Ship's Counselor</p></div><div class="mani-field character"><p><a href="/manifest/tlaruk-akaigan">T’Laruk Akaigan</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Head Nurse</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Physician's Mate</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row npc">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/teal.png" /></div><div class="mani-field position"><p>EMH Mark IV</p></div><div class="mani-field character"><p><a href="/manifest/emh/">Doctor Chen <em>(NPC)</em></a></p></div>
         </div>
      </div>

      <div id="operations"></div>
      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Operations_Department" target="_blank">OPERATIONS</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/y-o1.png" /></div><div class="mani-field position"><p>Chief of Operations</p></div><div class="mani-field character"><p><a href="/manifest/clara-watson">Clara Watson</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Operations Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Boatswain</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Quartermaster</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div id="science"></div>
      <div class="department section open-npc">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Science_Department" target="_blank">SCIENCE</a></h3>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Xenoanthropologist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Xenobiologist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Xenobotanist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Physicist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Stellar Cartographer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row npc">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-e8.png" /></div><div class="mani-field position"><p>Scientist's Mate</p><p class="secondary">Acting Chief Science Officer</p></div><div class="mani-field character"><p><a href="jaarvid-grix-npc">Jaarvid Grix <em>(NPC)</em></a></p></div>
         </div>
      </div>

      <div id="tactical"></div>
      <div class="department section open-npc">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Security/Tactical_Department" target="_blank">TACTICAL/SECURITY</a></h3>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief of Tactical & Security</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Master-at-Arms</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row npc">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/y-e8.png" /></div><div class="mani-field position"><p>Gunner's Mate</p><p class="secondary">Acting Chief T&S Officer</p></div><div class="mani-field character"><p><a href="/manifest/losia-mora-npc">Losia Mora <em>(NPC)</em></a></p></div>
         </div>
      </div>  
      
      <div id="civilians"></div>
      <div class="department section open">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Civilians" target="_blank">CIVILIANS</a></h3>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Galley/Lounge Manager</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row open">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Barber</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>  

      </div>
   </div>
</div>

</div>

</body>

<?php get_footer(); ?>