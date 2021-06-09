<?php

namespace Step\Acceptance;

use Page\Acceptance\MainPage;

class WishListStep extends \AcceptanceTester
{
    public function addProductToWishList()
    {
        $I = $this;

        for ($i = 1; $i <= 2; $i++) {

            $productCardSelector = sprintf(MainPage::$productCardSelector, $i);
            $quickViewSelector = sprintf(MainPage::$quickViewSelector, $i);

            $I->moveMouseOver($productCardSelector);
            $I->waitForElementClickable($quickViewSelector);
            $I->click($quickViewSelector);
            $I->switchToFrame(MainPage::$iframeSelector);
            $I->waitForElementClickable(MainPage::$wishListButtonSelector);
            $I->click(MainPage::$wishListButtonSelector);
            $I->waitForElementClickable(MainPage::$wishListAddedModalCloseBtnSelector);
            $I->click(MainPage::$wishListAddedModalCloseBtnSelector);
            $I->switchToFrame();
            $I->waitForElementClickable(MainPage::$productDetailModalCloseBtnSelector);
            $I->click(MainPage::$productDetailModalCloseBtnSelector);
        }
    }
}
