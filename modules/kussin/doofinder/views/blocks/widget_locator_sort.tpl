[{oxscript include=$oViewConf->getModuleUrl('kussin/doofinder','out/src/js/scripts.js') priority=10}]

[{assign var="oConf" value=$oViewConf->getConfig()}]

[{assign var="sInstallationId" value=$oConf->getConfigParam('sKussinDoofinderInstallationId')}]
[{assign var="blEnabled" value=$oConf->getConfigParam('blKussinDoofinderFilterEnabled')}]
[{assign var="sFilterParams" value=$oView->getDoofinderFilterParams()}]
[{assign var="sUtmParams" value=$oView->getDoofinderUtmParams()}]

[{if $sInstallationId && $blEnabled && $sFilterParams}]
<div class="btn-group" id="kussin-doofinder-filter-wrapper">
    <button
        type="button"
        class="btn btn-outline-dark btn-sm"
        id="kussin-doofinder-filter-btn"
        data-filter-params="[{$sFilterParams}]"
        data-utm-params="[{$sUtmParams}]">
        <strong>[{oxmultilang ident="KUSSIN_DOOFINDER_FILTER"}]</strong>
    </button>
</div>
[{/if}]

[{$smarty.block.parent}]