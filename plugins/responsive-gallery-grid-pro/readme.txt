=== Responsive Gallery Grid Pro ===
Contributors: Jules Colle
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=j_colle%40hotmail%2ecom&lc=US&item_name=Jules%20Colle%20%2d%20WP%20plugins%20%2d%20Responsive%20Gallery%20Grid&item_number=rgg&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: HTML5, gallery, Google+, google images, responsive, pop-out, responsive gallery
Requires at least: 3.0
Tested up to: 4.9.2
Stable tag: 2.1.5
License: GPLv2 or later


Transforms the native WordPress gallery to a responsive gallery, respecting image proportions.


== Description ==

Transforms the native WordPress gallery to a responsive gallery, respecting image proportions. Compatible with most lightbox plugins.

<a href="http://bdwm.be/rgg/demo/">View Demo</a>
<a href="http://bdwm.be/rgg/shortcode-parameters/">Documentation</a>
<a href="http://bdwm.be/rgg/shortcode-parameters/">Shortcode generator</a>

== Installation ==

1. Upload the plugin contents to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in Wordpress Admin
1. That's it! Your default WordPress Galleries should now all look titled and responsive!

= Finetuning =

If you want to finetune the options per gallery you can add some parameters to the gallery shortcode (from text editor).

Documentation available at http://bdwm.be/rgg/shortcode-parameters/

You Can also change the default options for all galleries under Settings > RGG Options

== Frequently Asked Questions ==

= How do I add a lightbox to the gallery? =

Any way you would add a lightbox to the native wordpress gallery will work for Responsive Gallery Grid.
One plugin I know that will work right out of the box is jQuery ColorBox. http://wordpress.org/extend/plugins/jquery-colorbox/

= The images to the left and right of the grid are cut of when I mouse over them. How do I solve this? =

This will happen if one of the grid containers have the CSS property <code>overflow:hidden</code>. If possible, you will
need to change this to <code>overflow:visible</code>. If not, you can
wrap the gallery inside a div, and assign some margins to it. If that's no option either, you should just disable scaling, or use negative scaling
by setting the <code>scale</code> property to a value between 0.5 and 1 in the schortcode.

= How can I further configure and modify the gallery to my needs? =

Please take a look here: http://bdwm.be/rgg/shortcode-parameters/

Need anything else? Please start a support thread?

= Will there be added more options? =

Sure. Please start a support thread for any of your requests.

== Upgrade Notice ==

1. RGG now uses native gallery features to retrieve the images, this means you can no longer add multiple instances of the same image to a single gallery. If you need this feature, please revert to version 1.3.

== Screenshots ==

1. Responsive Gallery Grid in action. By default the images will pop out on mouse-over.
2. The gallery shortcode can be extended with some options, from the text editor.
3. From the WYSIWYG view the gallery looks like an ordinary Wordpress gallery, so you can easily add and remove pictures the way you are used to.
4. You can pimp eacht individual gallery to your needs by updating the gallery shortcode paramaters. (Check out the documentation)

== Changelog ==

= 2.1.5 (Apr 04, 2018) =
* Use Scale parameter for zoom effect (Pro only)
* Add "last row behavior" option to settings screen (Pro only)

= 2.1.4 (Mar 15, 2018) =
* Completed documentation: http://bdwm.be/rgg/shortcode-parameters/
* Some design changes in admin interface
* Improved compatibility with the plugins responsive-lightbox and wp-gallery-custom-links
* Fix bug: Responsive Lightbox loading when rel=""

= 2.1.3 (Feb 13, 2018) =
* Added Zoom and Fade effects (Pro Only)

= 2.1.2 (Jan 28, 2018) =
* add link parameter, so pictures in gallery can be linked to attachment page, media file (default) and None.
* Make compatible with responsive-lightbox with zero configuration (no more need to "force lightbox")
* implement last-row behavior (last row same height as previous, justified, align center, align right) (Pro Only)
* make captions work when no animation is selected (Pro Only)

= 2.1.1 (Jan 18, 2018) =
* get rid of ridiculously high z-indexes for images, as they were overlapping modal windows in some cases.
* fix PHP warning problem with pligins and themes, that call post_gallery hook without the optional 3th paramater $instance.

= 2.1 (Jan 07, 2018) =
* Big changes. Completely rewritten. (December 31, 2017)
* Merged RGG Pro and RGG Free.
* Make ready for release.

= 1.8-beta-1 (November 16, 2016) =
* prevent jumping images (beta 1)

= 1.7 (June 28, 2016) =
* updated jquery.imagesloaded plugin to 4.1.0
* added additional caption styles and effects

= 1.6.2 (June 27, 2016) =
* Added CSS line `img { height:auto; }` to fix problem with aspect ratio's (https://wordpress.org/support/topic/onpageload-wrong-aspect-ratio?replies=4)

= 1.6.1 (June 26, 2016) =
* Fix problem with media library not loading. (some commented-out html code related to the update-nag got sent together with the json response)

= 1.6 (June 26, 2016) =
* Applied changes also appied in RGG 2.0.2 (free)

= 1.1 (March 16, 2015) =
* Test update

= 1.0 (March 16, 2015) =
* First release