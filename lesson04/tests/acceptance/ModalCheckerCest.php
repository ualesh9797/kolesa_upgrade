<?php

class ModalCheckerCest
{

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage("");
        $I->see("Blouse");
        $I->moveMouseOver("#homefeatured > li:nth-child(2)");
        $I->waitForElement("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");
        $I->click("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");
        $I->waitForElement("#index > div.fancybox-overlay.fancybox-overlay-fixed > div");
        $I->switchToFrame("/html/body/div[2]/div/div/div/div/iframe");
        $I->see("Blouse");
    }
}
