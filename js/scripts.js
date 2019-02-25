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

        checkLogin();
        autoSearchUsers();
        togglePositions();
        toggleNpcPositions();
    })

})( jQuery );
