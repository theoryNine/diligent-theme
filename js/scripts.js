/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

    $(document).ready(function() {

        function checkLogin() {
            var $navMenu = $('#menu-nav li');
            var $userToolbar = $('.user-toolbar');

            if ($navMenu.text().indexOf("Login") > -1) {
                $userToolbar.hide();
            }
        }

        checkLogin();
    })

})( jQuery );
