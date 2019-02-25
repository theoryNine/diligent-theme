/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

    $(document).ready(function() {
        var openPositionsShown = true;
        var npcPositionsShown = true;

        function toggleManifestSections() {
            if (openPositionsShown === false && npcPositionsShown === false) {
                $('.open-npc').slideUp();
            } else {
                $('.open-npc').slideDown();
            }
        }

        function togglePositions() {
            $('.openToggle').on('click', function(e) {
                    e.preventDefault();
                    openPositionsShown = !openPositionsShown;
                    toggleManifestSections();
                    $('.openButton').toggle();
                    $('.open').slideToggle();
                });
        }
 

        function toggleNpcPositions() {
            $('.npc-toggle').on('click', function(e) {
                    e.preventDefault();
                    npcPositionsShown = !npcPositionsShown;
                    toggleManifestSections();
                    $('.npc-open-btn').toggle();
                    $('.npc').slideToggle();
                });
        }
        
        togglePositions();
        toggleNpcPositions();
    })

})( jQuery );
