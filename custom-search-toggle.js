jQuery(document).ready(function ($) {
    $('#search-toggle').on('click', function () {
        const $bar = $('.sliding-search-bar');
        const isExpanded = $(this).attr('aria-expanded') === 'true';

        $(this).attr('aria-expanded', !isExpanded);
        $bar.toggleClass('expanded');
    });
});
