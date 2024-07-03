<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class SearchController extends SearchController_parent
{

    public function render()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        $sHomepageUrl = $this->getConfig()->getShopHomeURL();
        $sSearchParamForQuery = trim($oConfig->getRequestParameter('searchparam', true));

        if ($sSearchParamForQuery) {
            $sSearchHashId = $oConfig->getConfigParam('sKussinDoofinderSearchHashId');

            $sHomepageUrl .= '/' . $sSearchHashId . '/fullscreen-brand-categories/m=and&q=' . urlencode($sSearchParamForQuery);

            // HOTFIX #64685
            $sHomepageUrl = str_replace('?/', '', $sHomepageUrl);
        }

        // Set HTTP status code 302 (Found)
        header("HTTP/1.1 302 Found");

        // Perform the redirection
        header("Location: $sHomepageUrl");
        exit;
    }
}