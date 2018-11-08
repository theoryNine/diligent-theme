/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

    $(document).ready(function() {
        var $navMenu = $('.menu-nav');
        var loginBtn = "Login";
        var $userToolbar = $('.user-toolbar');

        function checkLogin() {
            if ($navMenu.text(loginBtn)) {
                $userToolbar.hide();
            }
        }

        checkLogin();
    })

})( jQuery );
