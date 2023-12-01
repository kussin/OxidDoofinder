[{$smarty.block.parent}]

[{assign var="oConf" value=$oViewConf->getConfig()}]

[{assign var="sInstallationId" value=$oConf->getConfigParam('sKussinDoofinderInstallationId')}]
[{assign var="blEnabled" value=$oConf->getConfigParam('blKussinDoofinderRecommendationsEnabled')}]
[{assign var="blSubHeading" value=$oConf->getConfigParam('blKussinDoofinderRecommendationsSubheadingEnabled')}]
[{assign var="sHashId" value=$oConf->getConfigParam('sKussinDoofinderRecommendationsHashId')}]
[{assign var="iNumberOfProducts" value=$oConf->getConfigParam('iKussinDoofinderRecommendationsNumberOfProducts')}]
[{assign var="sZone" value=$oConf->getConfigParam('sKussinDoofinderZone')}]
[{assign var="sCurrencySymbol" value=$oConf->getConfigParam('sKussinDoofinderRecommendationsCurrencySymbol')}]
[{assign var="sCurrencyFormat" value=$oConf->getConfigParam('sKussinDoofinderRecommendationsCurrencyFormat')}]

[{if $sInstallationId && $blEnabled && $sHashId}]
    <div class="boxwrapper" id="kussin-doofinder-recommendations-wrapper">
        <div class="page-header">
            <h2>
                [{oxmultilang ident="KUSSIN_DOOFINDER_RECOMMENDATIONS"}]

            </h2>

            [{if $blSubHeading}]
                <small class="subhead">[{oxmultilang ident="KUSSIN_DOOFINDER_RECOMMENDATIONS_SUBHEADING"}]</small>
            [{/if}]
        </div>

        <div class="list-container" id="kussin-doofinder-recommendations-container">
            <script src="//cdn.doofinder.com/recommendations/js/doofinderRecommendation.min.js"></script>
            <df-recommendations
                    hashid="[{$sHashId}]"
                    total-products="[{$iNumberOfProducts}]"
                    region="[{$sZone}]"
                    currency-symbol="[{$sCurrencySymbol}]"
                    currency-format="[{$sCurrencyFormat}]"
            ></df-recommendations>
        </div>
    </div>
[{/if}]