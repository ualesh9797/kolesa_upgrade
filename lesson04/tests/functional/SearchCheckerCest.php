<?php

class SearchCheckerCest
{

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $searchInputCss = "#search_query_top";
        $searchInputXPath = "//*[@id='search_query_top']";

        $searchButtonCss = "#searchbox > button";
        $searchButtonXPath = "//*[@id='searchbox']/button";

        $productCardCss = ".ajax_block_product";
        $productCardXPath = "//li[contains(@class, 'ajax_block_product')]";

        $I->amOnPage("");
        $I->fillField($searchInputXPath, "Printed dress");
        $I->click($searchButtonXPath);
        $I->seeNumberOfElements($productCardXPath, 5);
    }
}
