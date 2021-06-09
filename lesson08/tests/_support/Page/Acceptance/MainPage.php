<?php

namespace Page\Acceptance;



class MainPage
{
    public static $URL = '';

    public static $productCardSelector = "#homefeatured .ajax_block_product:nth-child(%d)";
    public static $quickViewSelector = "#homefeatured .ajax_block_product:nth-child(%d) a.quick-view";
    public static $iframeSelector = '.fancybox-overlay iframe';
    public static $wishListButtonSelector = '#wishlist_button';
    public static $wishListAddedModalCloseBtnSelector = '#product > .fancybox-overlay a';
    public static $productDetailModalCloseBtnSelector = '#index > .fancybox-overlay a';
    public static $linkToCabinetSelector = 'nav a[href*="my-account"]';
    public static $logoutBtnSelector = 'nav a[href*="mylogout"]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
