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
      <p class="text-center department-links"><a href="#command">Command</a> - Engineering - Flight Control - Intelligence - Medical - Operations - Science - Tactical/Security</p>
</div>

<div class="section">
   <div class="manifest">
      <div class="department section">
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Command_Department" target="_blank" id="command">COMMAND</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o5.png" /></div><div class="mani-field position"><p class="tooltips" title="
            Every Starfleet Facility has a single commanding officer responsible for the safety of their crew and the success of their missions. They have 
            final accountability for any actions taken by their crew, and Starfleet goes to great lengths to prepare a CO for the job ahead, including the 
            interpretation and execution of Starfleet rules and regulations.">
                  Commanding Officer</p></div><div class="mani-field character"><p><a href="/manifest/elgor-rae/">Elgor Rae</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o4.png" /></div><div class="mani-field position"><p class="tooltips" title="
            They are responsible for representing the CO to the officer crew, as well as insuring the orders of the CO are carried out by all hands. They make sure all 
            stations are operating at peak efficiency. In times of crisis, the XO may be designated as Commander Pro Tempore and is one of two officers capable of 
            jointly removing the CO from command.">
                  Executive Officer</p></div><div class="mani-field character"><p><a href="/manifest/marcus-bancroft/">Marcus Bancroft</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="
            The seniormost Chief Petty Officer (including Senior and Master Chiefs), regardless of rating, is designated by the Commanding Officer as the 
            Chief of the Boat (for vessels) or Command Chief (for starbases). In addition to his or her departmental responsibilities, the COB/CC performs 
            the following duties: serves as a liaison between the Commanding Officer (or Executive Officer) and the enlisted crewmen; ensures enlisted crews 
            understand Command policies; advises the Commanding Officer and Executive Officer regarding enlisted morale, and evaluates the quality of noncommissioned 
            officer leadership, management, and supervisory training.">
                  Chief of the Boat</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Engineering_Department" target="_blank">ENGINEERING</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="
            The Chief Engineer is responsible for the condition of all systems and equipment on board a Starfleet ship or facility. They oversee maintenance, repairs 
            and upgrades of all equipment. They are also responsible for the many repairs teams during crisis situations.">
                  Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Engineer's Mate</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Transporter Chief</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Flight_Control_Department" target="_blank">FLIGHT CONTROL</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/r-o1.png" /></div><div class="mani-field position"><p class="tooltips" title="
            Originally known as helm, or Flight Control Officer, Conn incorporates two jobs, Navigation and flight control. A Conn Officer must always 
            be present on the bridge of a starship. They plot courses, supervise the computers piloting, correct any flight deviations and pilot the ship 
            manually when needed. The Chief Conn Officer is the senior most Conn Officer aboard, serving as a Senior Officer, and Chief of the Personnel under 
            them.">
                  Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/manifest/aerith-terovn/">Aerith Terovn</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
            </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Intelligence_Department" target="_blank">INTELLIGENCE</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/s-o3.png" /></div><div class="mani-field position"><p class="tooltips" title="
            They are responsible for organizing all intelligence the department has gathered and presenting it to the duty station's Commanding Officer. They assist the 
            Commanding Officer, Strategic Operations Officer (if one is present) and the Security/Tactical Officer. 
            They offer advice on ship/starbase operations, especially in times of conflict or covert missions.">
                  Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/manifest/john-simmons">John Simmons</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Intel Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Collection's Manager</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Medical_Department" target="_blank">MEDICAL</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-o4.png" /></div><div class="mani-field position"><p class="tooltips" title="
            Onboard a starship, a Chief Medical Officer has a vital role to play. A Commanding Officer needs a crew they can rely on and it is the duty of the Chief 
            Medical Officer to ensure the physical and mental states of wellbeing. The CMO often corresponds with the Executive Officer and the Chief Counselor on-board 
            a starship to assess his or her patients needs.">
                  Chief Medical Officer</p></div><div class="mani-field character"><p><a href="/manifest/caelestis-everett">Cælestis Everett</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-o3.png" /></div><div class="mani-field position"><p class="tooltips" title="
            Because of their training in psychology, technically the ship's/facility's Counselor is considered part of Starfleet Medical. The Counselor is responsible 
            both for advising the CO in dealing with other people and races, and in helping crew members with personal, psychological, and emotional problems.">
                  Ship's Counselor</p></div><div class="mani-field character"><p><a href="/manifest/tlaruk-akaigan">T’Laruk Akaigan</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Head Nurse</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/teal.png" /></div><div class="mani-field position"><p>EMH Mark IV</p></div><div class="mani-field character"><p><a href="/manifest/emh/">Doctor Chen <em>(NPC)</em></a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Operations_Department" target="_blank">OPERATIONS</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="
            The Chief Operations Officer has the primary responsibility of ensuring that ship functions, such as the use of the lateral sensor array, do not interfere 
            with one and another. They must prioritize resource allocations, so that the most critical activities can have every chance of success. If so required, they 
            can curtail shipboard functions if they think the functions will interfere with the ship's current mission or routine operations.">
                  Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Operations Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Boatswain</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Quartermaster</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Security/Tactical_Department" target="_blank">SCIENCE</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/navy_gold/t-o3.png" /></div><div class="mani-field position"><p class="tooltips" title="
            The Chief Science Officer is responsible for all the scientific data the ship/facility collects, and the distribution of such data to specific section within 
            the department for analysis. They are also responsible with providing the ship's captain with scientific information needed for command decisions.">
                  Chief Science Officer</p></div><div class="mani-field character"><p><a href="/manifest/elijah-thorne">Elijah Thorne</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Anthropologist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Biologist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Physicist</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Stellar Cartographer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3><a href="https://wiki.bravofleet.com/index.php?title=Security/Tactical_Department" target="_blank">TACTICAL/SECURITY</a></h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p class="tooltips" title="
            In the Chief Tactical Officer role, they are the vessel's gunman. They are responsible for the ships weapon system, and are also the Commanding 
            Officer's tactical advisor in starship combat matters. Very often Tactical Officers are also trained in ground combat and small unit tactics. 
            There is much more to tactical than simply overseeing the weapons console on the bridge. Tactical maintains the weapons systems aboard the 
            ship/starbase, maintaining and reloading photons magazines. Tactical planning and current Intelligence analysis (if no Intelligence operatives 
            are aboard) is also overseen by the tactical department.">
                  Chief Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief of Tactical & Security</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/diligent/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Master-at-Arms</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>      

      </div>
   </div>
</div>

</div>

</body>

<?php get_footer(); ?>