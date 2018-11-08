/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

    $(document).ready(function() {
        var $navMenu = $('#menu-nav li');
        var $userToolbar = $('.user-toolbar');

        console.log($navMenu);
        console.log($navMenu.text().indexOf("Login"));

        function checkLogin() {
            if ($navMenu.text().indexOf("Login") > -1) {
                $userToolbar.hide();
            }
        }

        checkLogin();
    })

})( jQuery );
