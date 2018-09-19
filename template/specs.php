<?php
/*
Template Name: Ship Specs Template
*/
?>

<?php

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container specs">
      <div class="hero"><img src="/wp-content/themes/diligent/images/diligent-msd.png" /></div>
      <div class="intro section">
         <h1 class="text-center">diligent-class <span class="heavy">SPECIFICATIONS</span></h1>
         <p>The <em>Diligent</em> is a Diligent-class starship, the first of the line, built to serve Starfleet as a 
         short-range explorer, diplomatic transport, and combat escort.</p>
      </div>
      <div class="text-center section subnav-section">
         <div class="subnav"><h3><a href="#layout">deck layout</a></h3></div>
         <div class="subnav"><h3><a href="#gallery">gallery</a></h3></div>
         <div class="subnav"><h3><a href="#specifications">specifications</a></h3></div>
         <div class="subnav"><h3><a href="#class_background">background</a></h3></div>
      </div>
      <div class="section layout" id="layout"><h1 class="text-center"><span class="heavy">DECK</span> layout</h1><br>
         <ul>
            <li>Deck 1: <em>Fore:</em> <a href="/wp-content/uploads/2018/09/labeled-bridge.jpg" target="_blank">Main Bridge, Captain's Ready Room, Observation Lounge</a> - <em>Aft:</em> Cargobay 1, Aft Dorsal Torpedo Launcher</li>
            <li>Deck 2: <a href="/wp-content/uploads/2018/09/captains_quarters.jpg" target="_blank">Captain's Quarters</a>, <a href="/wp-content/uploads/2018/09/officer_quarters.jpg" target="_blank">Senior Officer's Quarters</a>, <a href="/wp-content/uploads/2018/09/mess_hall.jpg" target="_blank">Ship's Mess and Galley</a>, Officers Lounge, Deuterium Fuel Tanks, Gymnasium</li>
            <li>Deck 3: Transporter Rooms 1, <a href="/wp-content/uploads/2018/09/vipquarters.jpg" target="_blank">VIP Quarters</a>, <a href="/wp-content/uploads/2018/09/crewquarters.jpg" target="_blank">Crew Quarters</a>, Science Labs, Aeroponics, Astrometrics, Holosuites 1 - 4, Conference Rooms</li>
            <li>Deck 4: Computer Core Control Room, <a href="/wp-content/uploads/2018/09/engineering.jpg" target="_blank">Main Engineering</a>, Engineering Support, Shuttle Bay</li>
            <li>Deck 5: Transporter Rooms 2 and 3, <a href="/wp-content/uploads/2018/09/sickbay.jpg" target="_blank">Medical Bay</a>, <a href="/wp-content/uploads/2018/09/aft_lounge.jpg" target="_blank">Aft Lounge</a>, Navigational Deflector Control, Security Center</li>
            <li>Deck 6: Fusion Reactors, Anti-Matter Storage Pods, Cargobay 2 and 3, <a href="/wp-content/uploads/2018/09/crewquarters.jpg" target="_blank">Crew Quarters</a></li>
            <li>Deck 7: Forward Torpedo Launchers</li>
            <li>Deck 8: Emergency Power Generators, Rear Torpedo Launchers</li>
            <li>Deck 9: <em>non-habitable</em> Engineering Crawlspace, Mechanical</li>
         </ul>
         <p class="disclaimer"><em>Main Engineering was done by <a href="https://forum.bravofleet.com/forum/bravo-fleet-staff-departments/bravo-fleet-graphics-department/completed-works/190-residualrose-s-interior-decorating-warning-gfx-intensive" target="_blank">ResidualRose of Bravofleet</a>, edited from stock images found on <a href="http://www.ex-astris-scientia.org/gallery/bridges1.htm" target="_blank">ex-astris-scientia.org</a><br />
         All other interior illustrations were expertly created by <a href="https://www.deviantart.com/bobye2" target="_blank">bobeye</a></em>
         </p>
      </div>
      <div class="text-center section gallery" id="gallery">
            <div>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="entry">
                        <?php the_content(); ?>
                  </div><!-- entry -->
                  <?php endwhile; ?>
            <?php endif; ?>
            </div>
      </div>

      <div class="section specifications" id="specifications"><h1 class="text-center">ship <span class="heavy">SPECIFICATIONS</span></h1>
         <h3>Ship Specifications</h3>
            <h4>Basic Information</h4>
               <p><strong>Designation:</strong> USS Diligent<br />
               <strong>Registry:</strong> NCC-80651</p>
               <p><strong>Role:</strong> Frigate<br>
               <strong>Dimensions:</strong> 187.5 meters (L) x 107.5 meters (W) x 37.2 meters (H)<br>
               <strong>Decks:</strong> 9<br>
            <h4>Crew Compliment</h4>
               <p>
                  <strong>Total Crew:</strong> 120 | <strong>Evac Limit:</strong> 1,200
                  <ul>
                     <li>30 Officers</li>
                     <li>90 Enlisted</li>
                  </ul>
               </p>
            <h4>Propulsion</h4>
               <strong>Warp Speed</strong>
                  <ul>
                     <li><strong>Cruising Speed:</strong> Warp 7</li>
                     <li><strong>Maximum Warp:</strong> Warp 8.6 (36 hrs.)</li>
                     <li><strong>Emergency Warp:</strong> Warp 9.1 (18 hrs.)</li>
                  </ul>
            <h4>Tactical Systems</h4>
               <p><strong>Energy Weapons</strong>
                  <ul>
                     <li>11x Type X Phaser Arrays</li>
                  </ul>
               </p>
               <p><strong>Projectile Weapons</strong>
                  <ul>                  
                        <li>2 Forward Torpedo/Probe Launchers</li>
                        <li>3 Aft Torpedo/Probe Launcher</li>
                        <li>100 Quantum Torpedoes</li>
                        <li>100 Photon Torpedoes</li>
                  </ul>
               </p>
               <p><strong>Defensive Systems</strong>
                  <ul>
                     <li>Multi-Layered Shielding System</li>
                     <li>Ablative Armor</li>
                  </ul>
               </p>
            <h4>Auxiliary Craft</h4>
            <p><strong>Maintenance Craft:</strong> 4x <a href="https://wiki.bravofleet.com/index.php?title=Work_Bee" target="_blank">Work Bee</a></p>
            <p><strong>Shuttlebays:</strong> 1<br>
            <strong>Shuttle Capacity:</strong> 4<br>
            <strong>Attached Shuttles:</strong>
                  <ul>
                        <li>1x <a href="https://wiki.bravofleet.com/index.php?title=Type_8_shuttlecraft" target="_blank">Type-8 Shuttlecraft</a></li>
                        <li>2x <a href="https://wiki.bravofleet.com/index.php?title=Type_9_shuttlecraft" target="_blank">Type-9 Shuttlecraft</a></li>
                        <li>1x <a href="https://wiki.bravofleet.com/index.php?title=Type_11_shuttlecraft" target="_blank">Type-11 Shuttlecraft</a></li>
                  </ul>
            </p>
      </div>

      <div class="section class-background" id="class_background"><h1 class="text-center"><span class="heavy">DILIGENT-CLASS</span> background</h1><br>
            <p>By 2376 the Dominion War was over and Starfleet was faced with the herculean task of rebuilding the fleet. 
            While classes like the Akira, Intrepid, Saber, Defiant and Steamrunner were being produced at record rates to bolster Starfleet’s numbers, 
            it was decided that new designs were also needed to address gaps in functionality made apparent during the war.</p>
            <p>The Defiant Class design, for instance, demonstrated vividly the difference between a vessel designed primarily for exploration and one 
            designed primarily for combat. While the war was over and diplomatic and scientific discovery needed to resume, Command decided it was not 
            about to grow lax and so called for a vessel with a compact design and significant combat capabilities, like the Defiant, that also had the 
            capacity to execute scientific, diplomatic and explorative missions on a small scale, when larger explorers were not required.</p>
            <p>The Diligent Class was the resulting proposal. Equipped with the latest technology, including bio-neural circuitry, new sensor suites 
            and propulsion systems, at the expense of being somewhat larger, it represented an overall improvement over the smaller Defiant Class in 
            terms of non-combat mission interoperability, while still maintaining nearly the same combat potential. However, this vessel is not designed 
            to replace the Defiant class project, but to supplement it and other small vessels designed for short-range exploratory missions. It sacrifices 
            the heavy pulse phaser cannons and greater maneuverability of the smaller vessel for a high top speed and creature comforts for its crew.</p>
            <p>Compared to the Defiant, crew accommodations are increased greatly over the older class; officers ranked Lieutenant Junior Grade and above 
            have their own staterooms, Ensigns, warrant officers, and chief petty officers share bunked quarters, with one other person, while petty officers 
            and below share quarters with three other crewmen. The starship is equipped with two holosuites as well as a fully equipped mess hall.</p>
            <p>The ship is also equipped with two sets of VIP quarters and a conference lounge, facilities not featured aboard a Defiant, Raptor, or Saber 
            Class, which makes it capable of undertaking diplomatic missions between two to three parties. This capability, combined with her impressive 
            weapons array, makes the Diligent suitable for second or third contact missions with new races or to mediate disputes between small spacefaring 
            powers. In essence, the Diligent has the ability to ‘fight her way out’ should negotiations fail.</p>
            <p>Medical systems take heavy inspiration from the Nova and Intrepid Class starships. They include one standard sickbay module, with an 
            attached medical lab, as well as a secondary ward and morgue. There are also provisions aboard to convert one of the vessel's standard science 
            labs to work as a medical lab if there’s ever a medical crisis. The ship takes a cue from the Prometheus Class in having full-ship holographic 
            projectors, to allow the ship's EMH to work anywhere on the vessel.</p>
            <p>The Diligent's warp propulsion system is based off of innovations made by both the Intrepid and Sovereign Class projects. The warp coils 
            are based off of a scaled-down Sovereign platform, while the warp core is a dilithium swirl chamber, based off of the Intrepid Class design, which 
            allows for excellent power and speed. The warp engines are mounted on variable orientation pylons. When not at warp the nacelles are held close 
            to the ship, minimizing the ship's target profile from the front and rear. This affords the nacelles some amount of protection since they are less 
            exposed. Shortly before going to warp, the nacelles are deployed to help create a warp field that does not harm subspace, similar to the way an 
            Intrepid Class vessel's nacelles pivot upwards prior to engaging warp speeds.</p>
            <p>While the Diligent Class boasts notable improvements over the Defiant Class, and other similarly sized vessels, it is not without reproach. 
            Designers were unable to find a way to install impulse engines capable of making the Class as manoeuvrable at sublight speeds than its smaller 
            cousins, for instance. Instead, the Diligent relies upon complete weapons arc coverage, hence the reason for the large number of phaser arrays 
            incorporated into the design. All of the vessel's torpedo launchers are capable of launching a complement of standard Starfleet probes, negating 
            the need for a specific probe launcher. During war time, these would be replaced with additional quantum and photon torpedoes.</p>
            <p>The vessel's single shuttlebay is not fitted for carrying fighters or large runabouts; a typical Diligent Class ship carries two shuttles. 
            One of the shuttles usually doubles as a captain's yacht, owing to the fact that the vessel is not equipped with such a craft.</p>
            <p>Typical missions for the Diligent Class include border patrol, light exploration, convoy escort, and tactical interdiction. It is not 
            suited for duty as a deep space exploratory vessel with missions longer than a year, due to its size, but it can certainly handle more local missions 
            based out of a starbase or deep space station.</p>
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