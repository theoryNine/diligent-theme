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
            var $crewResources = $('.crew-resources');
            var $joinLink = $('.menu-item-70');

            if ($navMenu.text().indexOf("Login") > -1) {
                $userToolbar.remove();
                $crewResources.remove();
                $joinLink.show();
            }

            if ($('.unread-count').text().indexOf("0") === -1) {
                $('.count-and-alert').css({'color':'#ff9999'});
                $('.message-count').css({'color':'#ff9999'});
                $('.count-and-alert').css({'display':'flex'});
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
