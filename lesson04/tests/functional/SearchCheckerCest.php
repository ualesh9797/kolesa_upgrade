<?php

class SearchCheckerCest
{

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage("");
        $I->fillField("#search_query_top", "Printed dress");
        $I->click("#searchbox > button");
        $I->seeNumberOfElements("#center_column > ul > li.ajax_block_product", 5);
    }
}
