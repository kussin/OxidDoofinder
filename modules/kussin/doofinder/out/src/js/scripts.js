$(document).ready(function () {
    $('#kussin-doofinder-filter-btn').on('click', function () {

        const sFilterParams = $(this).data('filter-params');

        if (sFilterParams) {

            const sBaseUrl = window.location.href.split('#')[0];

            window.location.href = sBaseUrl + sFilterParams;
        }
    });
});
