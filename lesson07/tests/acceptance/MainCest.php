<?php

use Codeception\Example;
use Page\Acceptance\MainPage;

class MainCest
{

    /**
     * Тест для проверки ссылок на секции
     * @param Example $data
     * @dataProvider getDataProviderForSectionLinks
     */
    public function checkSectionLinks(AcceptanceTester $I, Example $data)
    {
        $sectionLinkSelector = sprintf(MainPage::$sectionLinkSelector, $data["sectionName"]);

        $I->amOnPage(MainPage::$URL);
        $I->waitForElementClickable($sectionLinkSelector);
        $I->click($sectionLinkSelector);
        $I->seeInCurrentUrl($data["sectionName"]);
        $I->waitForText($data["pageHeader"], 10, MainPage::$pageHeaderSelector);
    }

    protected function getDataProviderForSectionLinks()
    {
        return [
            ["sectionName" => "develop", "pageHeader" => "Разработка"],
            ["sectionName" => "admin", "pageHeader" => "Администрирование"]
        ];
    }
}
