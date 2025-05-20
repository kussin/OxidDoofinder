$(document).ready(function () {
    $('#kussin-doofinder-filter-btn').on('click', function () {
        let sFilterParams = $(this).data('filter-params');
        let sBaseUrl = window.location.href.split('#')[0];

        if (sFilterParams) {
            if (sBaseUrl.length > 1 && sBaseUrl.endsWith('/')) {
                sBaseUrl = sBaseUrl.slice(0, -1);
            }

            if (sFilterParams.startsWith('/')) {
                sFilterParams = sFilterParams.substring(1);
            }

            window.location.href = sBaseUrl + '/' + sFilterParams;

            // FIX RELOAD
            window.location.reload(true);
        }
    });
});
