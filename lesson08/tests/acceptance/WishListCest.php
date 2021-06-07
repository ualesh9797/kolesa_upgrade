<?php

use Codeception\Example;
use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\CabinetPage;
use Step\Acceptance\WishListStep;

class WishListCest
{

    /**
     * метод который выполняется перед каждым тестом  
     */
    public function _before(WishListStep $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$emailSelector, LoginPage::$email);
        $I->fillField(LoginPage::$passwordSelector, LoginPage::$password);
        $I->click(LoginPage::$buttonSelector);
    }




    /**
     * Тест для добавления в избранное
     */
    public function checkWishList(WishListStep $I)
    {

        $I->amOnPage(MainPage::$URL);

        $I->addProductToWishList();

        $I->waitForElementClickable(MainPage::$linkToCabinetSelector);
        $I->click(MainPage::$linkToCabinetSelector);

        $I->waitForElementClickable(CabinetPage::$linkToMyWishListSelector);
        $I->click(CabinetPage::$linkToMyWishListSelector);

        $I->assertEquals(2, $I->grabTextFrom(CabinetPage::$wishListQtyTdSelector));
    }


    /**
     * метод который выполняется после каждого теста
     */
    public function _after(WishListStep $I)
    {
        $I->waitForElementClickable(CabinetPage::$wishListDeleteTdSelector);
        $I->click(CabinetPage::$wishListDeleteTdSelector);

        $I->waitForElementClickable(MainPage::$logoutBtnSelector);
        $I->click(MainPage::$logoutBtnSelector);
    }
}
