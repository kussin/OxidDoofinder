[{assign var="oConf" value=$oViewConf->getConfig()}]

[{assign var="sInstallationId" value=$oConf->getConfigParam('sKussinDoofinderInstallationId')}]
[{assign var="blEnabled" value=$oConf->getConfigParam('blKussinDoofinderFilterEnabled')}]

[{if $sInstallationId && $blEnabled}]
<div class="btn-group" id="kussin-doofinder-filter-wrapper">
    <button type="button" class="btn btn-outline-dark btn-sm" id="kussin-doofinder-filter-btn">
        <strong>[{oxmultilang ident="KUSSIN_DOOFINDER_FILTER"}]</strong>
    </button>
</div>
[{/if}]

[{$smarty.block.parent}]