<?php

use Page\Acceptance\LoginPage;

class LoginCest
{

    // tests
    public function checkErrorBlockClose(AcceptanceTester $I)
    {

        $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$loginInput, LoginPage::$username);
        $I->fillField(LoginPage::$passwordInput, LoginPage::$password);
        $I->click(LoginPage::$loginButton);
        $I->waitForElement(LoginPage::$errorBlock);
        $loginPage->closeErrorBlock();
        $I->dontSeeElement(LoginPage::$errorBlock);
    }
}
