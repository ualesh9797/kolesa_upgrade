<?php

class ModalCheckerCest
{

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $blouseProductCardCss = "#homefeatured > li:nth-child(2)";
        $blouseProductCardXPath = "//*[@id='homefeatured']/li[2]";

        $quickViewLinkCss = "#homefeatured > li:nth-child(2) a.quick-view";
        $quickViewLinkXPath = '//*[@id="homefeatured"]/li[2]//a[@class="quick-view"]';

        $modalCss = ".fancybox-overlay > div";
        $modalXPath = "//*[@class='fancybox-overlay fancybox-overlay-fixed']/div";


        $iframeCss = ".fancybox-overlay iframe";
        $iframeXPath = "//div[contains(@class, 'fancybox-overlay')]//iframe";

        $productTitleCss = "#product h1";
        $productTitleXPath = "//*[@id='product']//h1";

        $I->amOnPage("");
        $I->waitForText("Blouse");
        $I->moveMouseOver($blouseProductCardXPath);
        $I->waitForElement($quickViewLinkXPath);
        $I->click($quickViewLinkXPath);
        $I->waitForElement($modalXPath);
        $I->switchToFrame($iframeXPath);
        $I->waitForText("Blouse", 10, $productTitleXPath);
    }
}
