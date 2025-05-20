<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class ArticleListController extends ArticleListController_parent
{

    public function getDoofinderFilterParams()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        // GET HASH ID
        $sSearchHashId = $oConfig->getConfigParam('sKussinDoofinderSearchHashId');

        // GET CATEGORY NAME
        $sEncodedCategoryName = urlencode(parent::getTitle());

        // BUILD SEARCH TERM
        $aSearchTerm = [
            'f[categories][]=' . $sEncodedCategoryName,
            'm=and',
            'q=' . $sEncodedCategoryName,
        ];

        return '/' . $sSearchHashId . '/fullscreen/' . implode('&', $aSearchTerm);
    }
}