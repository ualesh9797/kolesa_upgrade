<?php

namespace Page\Acceptance;


class MainPage
{
    // include url of current page
    public static $URL = '';

    public static $dressesSelector = '#block_top_menu>ul>li>a[href="http://automationpractice.com/index.php?id_category=8&controller=category"]';
    public static $summerDressesSelector = '#block_top_menu>ul>li>a[href="http://automationpractice.com/index.php?id_category=8&controller=category"]+ul a[href="http://automationpractice.com/index.php?id_category=11&controller=category"]';


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function selectSummerDresses()
    {
        $this->acceptanceTester->moveMouseOver(self::$dressesSelector);
        $this->acceptanceTester->click(self::$summerDressesSelector);
    }
}
