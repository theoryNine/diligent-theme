/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

    $(document).ready(function() {
        var $navMenu = $('.menu-nav');
        var $userToolbar = $('.user-toolbar');

        function checkLogin() {
            if ($navMenu.text().indexOf("Login")) {
                $userToolbar.hide();
            }
        }

        checkLogin();
    })

})( jQuery );
