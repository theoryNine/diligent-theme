<?php
/*
Template Name: Manifest Template
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
</div>

<div class="section">
   <div class="manifest">
      <div class="department section">
         <h3>SENIOR STAFF</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o5.png" /></div><div class="mani-field position"><p class="tooltips" title="Every Starfleet Facility has a single commanding officer responsible for the safety of his/her crew and the success of their missions. S/he has final accountability for any actions taken by his/her crew, and Starfleet goes to great lengths to prepare a CO for the job ahead, including the interpretation and execution of Starfleet rules and regulations. Each CO is responsible for building and maintaining a website for their ship, for beginning and ending missions, and sending in monthly reports to his or her Task Force CO to keep him informed of the events on his or her ship.">
                  Commanding Officer</p></div><div class="mani-field character"><p><a href="/manifest/elgor-rae/">Elgor Rae</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="He is responsible for representing the CO to the officer crew, as well as insuring the orders of the CO are carried out by all hands. He makes sure all stations are operating at peak efficiency. In times of crisis, the XO may be designated as Commander Pro Tempore and is one of two officers capable of jointly removing the CO from command. At the end of each mission, the XO and CO determine any promotions that have been warranted over that mission.">
                  Executive Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="Originally known as helm, or Flight Control Officer, CONN incorporates two jobs, Navigation and flight control. A Flight Control Officer must always be present on the bridge of a starship. S/he plots courses, supervises the computers piloting, corrects any flight deviations and pilots the ship manually when needed. The Chief Flight Control Officer is the senior most CONN Officer aboard, serving as a Senior Officer, and Chief of the Personnel under him/her.">
                  Chief Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="The Chief Operations Officer has the primary responsibility of ensuring that ship functions, such as the use of the lateral sensor array, do not interfere with one and another. S/he must prioritize resource allocations, so that the most critical activities can have every chance of success. If so required, s/he can curtail shipboard functions if s/he thinks they will interfere with the ship's current mission or routine operations.">
                  Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="In the Chief Tactical Officer role, s/he is the vessel's gunman. S/he is responsible for the ships weapon system, and is also the Commanding Officer's tactical advisor in Star Ship Combat matters. Very often Tactical Officers are also trained in ground combat and small unit tactics. There is much more to tactical than simply overseeing the weapons console on the bridge. Tactical maintains the weapons systems aboard the ship/starbase, maintaining and reloading photons magazines. Tactical planning and current Intelligence analysis (if no Intelligence operatives are aboard) is also overseen by the tactical department.">
                  Chief Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="The Chief Engineer is responsible for the condition of all systems and equipment on board a Starfleet ship or facility. S/he oversees maintenance, repairs and upgrades of all equipment. S/he is also responsible for the many repairs teams during crisis situations.">
                  Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="The Chief Science Officer is responsible for all the scientific data the ship/facility collects, and the distribution of such data to specific section within the department for analysis. S/he is also responsible with providing the ship's captain with scientific information needed for command decisions.">
                  Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="Onboard a starship, a Chief Medical Officer has a vital role to play. A Commanding Officer needs a crew he/she can rely on and it is the duty of the Chief Medical Officer to ensure the physical and mental states of wellbeing. The CMO often corresponds with the Executive Officer and the Chief Counselor on-board a starship to assess his or her patients needs.">
                  Chief Medical Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="Because of their training in psychology, technically the ship's/facility's Counselor is considered part of Starfleet Medical. The Counselor is responsible both for advising the CO in dealing with other people and races, and in helping crew members with personal, psychological, and emotional problems.">
                  Ship's Counselor</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="S/he is responsible for organizing all intelligence the department's gathered and presenting it to the duty station's Commanding Officer. S/he assists the Commanding Officer, Strategic Operations Officer (if one is present) and the Security/Tactical Officer, sometimes the Marine Commanding Officer as well. S/he offers advice on ship/starbase operations, especially in times of conflict or covert missions.">
                  Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">
         <h3>FLIGHT CONTROL</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
            </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>OPERATIONS</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Operations Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>TACTICAL/SECURITY</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief of Tactical & Security</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>      

      <div class="department section">      
         <h3>ENGINEERING</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>SCIENCE</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>MEDICAL</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Medical Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Medical Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>INTELLIGENCE</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>CIVILIANS</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Coming Soon</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>RECURRING NPC'S</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Coming Soon</p></div><div class="mani-field character"><p>Coming Soon</p></div>
         </div>
      </div>

      </div>
   </div>
</div>

</div>

</body>

<?php get_footer(); ?>