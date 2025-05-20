<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class ManufacturerListController extends ManufacturerListController_parent
{

    public function getDoofinderFilterParams()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        // GET HASH ID
        $sSearchHashId = $oConfig->getConfigParam('sKussinDoofinderSearchHashId');

        // GET SEARCH TERM
        $sSearchTerm = parent::getTitle();

        return '/' . $sSearchHashId . '/fullscreen-brand-categories/m=and&q=' . urlencode($sSearchTerm);
    }
}