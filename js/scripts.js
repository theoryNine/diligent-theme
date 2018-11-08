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

            if ($('.unread-count').text().indexOf("0") === -1) {
                $('.message-count').css({'color':'#ff9999'});
            }
        }

        console.log($('.unread-count').text().indexOf("0"));

        checkLogin();
    })

})( jQuery );
