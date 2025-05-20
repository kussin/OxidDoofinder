$(document).ready(function () {
    $('#kussin-doofinder-filter-btn').on('click', function () {
        let sFilterParams = $(this).data('filter-params');
        let sUtmParams = $(this).data('utm-params');
        let sBaseUrl = window.location.href.split('#')[0];

        if (sFilterParams) {
            if (sBaseUrl.length > 1 && sBaseUrl.endsWith('/')) {
                sBaseUrl = sBaseUrl.slice(0, -1);
            }

            if (sFilterParams.startsWith('/')) {
                sFilterParams = sFilterParams.substring(1);
            }

            const hasFragment = sFilterParams.indexOf('#') !== -1;
            let sPath = '', sFragment = '';

            if (hasFragment) {
                const parts = sFilterParams.split('#');
                sPath = parts[0];
                sFragment = '#' + parts[1];
            } else {
                sPath = sFilterParams;
            }

            let sDoofinderUrl = sBaseUrl;
            if (sPath) {
                sDoofinderUrl += '/' + sPath;
            }

            if (sUtmParams) {
                sDoofinderUrl += sDoofinderUrl.includes('?') ? '&' : '?' + sUtmParams;
            }

            sDoofinderUrl += sFragment;

            window.location.assign(sDoofinderUrl);
        }
    });
});
