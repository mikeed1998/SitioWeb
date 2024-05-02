
$(document).ready(function() {
    function hideAllContainers() {
        $('.home-container, .aboutme-container, .portfolio-container, .topics-container, .contact-container').hide();
    }

    $('#home-tab').click(function(e) {
        e.preventDefault();
        hideAllContainers();
        $('.home-container').show();
    });

    $('#aboutme-tab').click(function(e) {
        e.preventDefault();
        hideAllContainers();
        $('.aboutme-container').show();
    });

    $('#portfolio-tab').click(function(e) {
        e.preventDefault();
        hideAllContainers();
        $('.portfolio-container').show();
    });

    $('#topics-tab').click(function(e) {
        e.preventDefault();
        hideAllContainers();
        $('.topics-container').show();
    });

    $('#contact-tab').click(function(e) {
        e.preventDefault();
        hideAllContainers();
        $('.contact-container').show();
    });

    hideAllContainers();
    $('.home-container').show();
});