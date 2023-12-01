[{$smarty.block.parent}]

[{assign var="oConf" value=$oViewConf->getConfig()}]

[{assign var="sInstallationId" value=$oConf->getConfigParam('sKussinDoofinderInstallationId')}]
[{assign var="sZone" value=$oConf->getConfigParam('sKussinDoofinderZone')}]

[{if $sInstallationId}]
    <script>
        [{capture assign="sJsInline"}]
        const dfLayerOptions = {
            installationId: '[{$sInstallationId}]',
            zone: '[{$sZone}]',
        };

        (function (l, a, y, e, r, s) {
            r = l.createElement(a); r.onload = e; r.async = 1; r.src = y;
            s = l.getElementsByTagName(a)[0]; s.parentNode.insertBefore(r, s);
        })(document, 'script', 'https://cdn.doofinder.com/livelayer/1/js/loader.min.js', function () {
            doofinderLoader.load(dfLayerOptions);
        });
        [{/capture}]
    </script>
    [{oxscript add=$sJsInline}]
[{/if}]