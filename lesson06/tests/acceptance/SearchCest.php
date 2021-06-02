<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

class SearchCest
{

    // tests
    public function checkErrorBlockClose(AcceptanceTester $I)
    {

        $mainPage = new MainPage($I);
        $searchPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->selectSummerDresses();
        $I->waitForText(SearchPage::$SUMMER_DRESSES, 10, SearchPage::$categoryNameLabel);
        $I->waitForElement(SearchPage::$productListRowGrid);
        $searchPage->switchToList();
        $I->waitForElement(SearchPage::$productListRowList);
    }
}
