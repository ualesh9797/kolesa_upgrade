<?php

namespace Page\Acceptance;


class MainPage
{
    public static $URL = '';

    public static $sectionLinkSelector = '.main-navbar a[href*="flows/%s"]';
    public static $pageHeaderSelector = '.page-header';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
