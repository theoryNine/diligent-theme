<?php
/*
Template Name: Homepage
*/
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container">
      <div class="hero">
         <img src="/wp-content/themes/diligent/images/eud-diligent-hero.png" />
      </div>
      <div class="sotm section"><a href="https://www.uss-diligent.com/forums/topic/episode-2">Episode 2: Through the Doorway and Into the Storm</a></div>
      <div class="intro section">
         <h1 class="text-center">welcome to the <span class="heavy">DILIGENT</span></h1>
         <p>The <em>USS Diligent</em>, NCC-80651, is a Play-by-Forum RPG based out of <a href="http://www.bravofleet.com" target="_blank">Bravo Fleet's</a> 
         <a href="http://www.bravofleet.com/group/task-force-38/" target="_blank">Task Force 38</a>, set in the year 2389. 
         Arriving through the Epatha gateway the <em>Diligent</em> joins a cadre of Starfleet ships working to establish a new foothold in the far reaches of the 
         Delta Quadrant. Shaken by the recent losses of the Solarian Gateway and Starbase 900 to the Borg, Starfleet resumes its mission of exploration and 
         peacemaking. The <em>Diligent</em>, under the command of <a href="/manifest/elgor-rae">Elgor Rae</a>, strikes out into the vast final frontier.</p>
         <p class="text-center"><em>The Diligent is rated <a href="https://www.bravofleet.com/bylaws/#By-Law_.232.6_-_Bravo_Fleet_Simulation_Rating_Guidelines" target="_blank">
         Mature for ages 16+</a></em></p>

         </div>

   </div>
</body>

<?php get_footer(); ?>