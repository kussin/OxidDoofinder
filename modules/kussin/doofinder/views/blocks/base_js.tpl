[{$smarty.block.parent}]

[{assign var="oConf" value=$oViewConf->getConfig()}]

[{assign var="blV1Enabled" value=$oConf->getConfigParam('blKussinDoofinderV1Enabled')}]
[{assign var="sInstallationId" value=$oConf->getConfigParam('sKussinDoofinderInstallationId')}]
[{assign var="sZone" value=$oConf->getConfigParam('sKussinDoofinderZone')}]
[{assign var="sInstallationScriptUrl" value=$oConf->getConfigParam('sKussinDoofinderInstallationScriptUrl')}]

[{if $blV1Enabled && $sInstallationId}]
    [{* Doofinder V1 Integration (Deprecated) *}]
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

[{elseif $sInstallationScriptUrl}]
    [{* Doofinder V2 Integration (Latest) *}]
    <script src="[{$sInstallationScriptUrl}]" async></script>
[{/if}]