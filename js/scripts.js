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

        function autoSearchUsers() {
            if (window.location.href.indexOf("/messages/new") > -1 && ($('.bbpm-results').length === 0)) {
                if ($('.bbpm-new .form-section label[for="search"]').val() === '') {
                    $('.bbpm-new .form-section input[name="search"]').val('*');
                    $('.bbpm-new .form-submit input[name="select_recipient"]').click();
                }
            }
        }

        checkLogin();
        autoSearchUsers();
    })

})( jQuery );